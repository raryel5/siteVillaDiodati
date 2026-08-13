<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use App\Models\Cliente;

use Illuminate\Support\Facades\Log;

// use Illuminate\Foundation\Queue\Queueable;
// use MercadoPago\SDK;
// use MercadoPago\Client\Payment\PaymentCaptureRequest;
// use Illuminate\Http\Request;
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
        Log::info('MP Job iniciado', [
            'payment_id' => $this->paymentId,
            'attempt' => $this->attempts(),
        ]);

        Cache::lock("mp:payment:{$this->paymentId}", 30)->block(5, function () {

            $token = config('services.mercadopago.api_key');

            $resp = Http::withToken($token)
                ->timeout(10)
                ->get("https://api.mercadopago.com/v1/payments/{$this->paymentId}");

            Log::info('MP Job consultou payment', [
                'payment_id' => $this->paymentId,
                'http_ok' => $resp->ok(),
                'http_status' => $resp->status(),
            ]);

            $resp->throw();
            $payment = $resp->json();

            Log::info('MP payment dados-chave', [
                'payment_id' => $this->paymentId,
                'mp_status' => $payment['status'] ?? null,
                'external_reference' => $payment['external_reference'] ?? null,
                'transaction_amount' => $payment['transaction_amount'] ?? null,
            ]);

            $externalReference = $payment['external_reference'] ?? null;
            $mpStatus = $payment['status'] ?? null;

            Log::info('MP payment consultado', [
                'payment_id' => $this->paymentId,
                'mp_status' => $payment['status'] ?? null,
                'external_reference' => $payment['external_reference'] ?? null,
                'transaction_amount' => $payment['transaction_amount'] ?? null,
            ]);

            if (!$externalReference || !$mpStatus) {
                return;
            }

            $cliente = Cliente::where('external_reference', $externalReference)->first();

            Log::info('MP Cliente lookup', [
                'external_reference' => $externalReference,
                'found' => (bool) $cliente,
                'cliente_id' => $cliente?->id,
                'current_payment_status' => $cliente?->payment_status,
            ]);



            if (!$cliente) {
                // tenta de novo mais tarde (ex.: até 10 tentativas)
                if ($this->attempts() < 10) {
                    $this->release(30); // reprocessa em 30s
                }
                return;
            }

            Log::info('MP Cliente lookup', [
                'external_reference' => $externalReference,
                'found' => (bool) $cliente,
                'cliente_id' => $cliente?->id,
                'current_payment_status' => $cliente?->payment_status,
            ]);

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

            Log::info('MP Cliente antes de salvar', [
                'cliente_id' => $cliente->id,
                'novo_status' => $cliente->payment_status,
                'mp_paymente_id' => $cliente->mp_payment_id,
            ]);

            $cliente->save();

            Log::info('MP Cliente atualizado', [
                'cliente_id' => $cliente->id,
                'novo_status' => $cliente->payment_status,
            ]);

            
        });
    }
}
