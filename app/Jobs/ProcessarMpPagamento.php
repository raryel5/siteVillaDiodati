<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
// use Illuminate\Foundation\Queue\Queueable;
// use MercadoPago\SDK;
// use MercadoPago\Client\Payment\PaymentCaptureRequest;
// use Illuminate\Http\Request;
use App\Models\Cliente;
// use MercadoPago\MercadoPagoConfig;
// use MercadoPago\Client\Payment\PaymentClient;


class ProcessarMpPagamento implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(public string $paymentId)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Cache::lock("mp:payment:{$this->paymentId}", 30)->block(5, function () {

            $token = config('services.mercadopago.api_key');

            $resp = Http::withToken($token)
                ->timeout(10)
                ->get("https://api.mercadopago.com/v1/payments/{$this->paymentId}");

            $resp->throw();
            $payment = $resp->json();

            $externalReference = $payment['external_reference'] ?? null;
            $mpStatus = $payment['status'] ?? null;

            if (!$externalReference || !$mpStatus) {
                return;
            }

            $cliente = Cliente::where('external_reference', $externalReference)->first();
            if (!$cliente) {
                return;
            }

            // Idempotência: se já finalizou, não mexe
            if (in_array($cliente->payment_status, ['pago', 'falha', 'cancelado'], true)) {
                return;
            }

            // Atualiza o id do pagamento (guarda rastreabilidade)
            $cliente->mp_payment_id = (string) $this->paymentId;

            // Mapeamento de status
            switch ($mpStatus) {
                case 'approved':
                    $cliente->payment_status = 'pago';
                    break;

                case 'rejected':
                    $cliente->payment_status = 'falha';
                    break;

                case 'cancelled':
                    $cliente->payment_status = 'cancelado';
                    break;

                case 'refunded':
                case 'charged_back':
                    $cliente->payment_status = 'cancelado';
                    break;

                default:
                    // pending / in_process / etc.
                    $cliente->payment_status = 'pendente2';
                    break;
            }

            $cliente->save();
        });
    }
}
