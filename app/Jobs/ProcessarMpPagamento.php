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
        // Evita processar o mesmo payment_id em paralelo e reduz duplicidade
        Cache::lock("mp:payment:{$this->paymentId}", 30)->block(5, function () {

            $token = config('services.mercadopago.api_key');

            $resp = Http::withToken($token)
                ->timeout(10)
                ->get("https://api.mercadopago.com/v1/payments/{$this->paymentId}");

            if (!$resp->ok()) {
                // Faz o Job falhar para o Laravel re-tentar (não re-tente via webhook)
                $resp->throw();
            }

            $payment = $resp->json();

            $status = $payment['status'] ?? null;
            $externalReference = $payment['external_reference'] ?? null;

            // Aqui você encontra seu pedido pelo external_reference (ou metadata)
            // e atualiza conforme o status.
            //
            // Exemplo (pseudo):
            $pedido = Cliente::where('external_reference', $externalReference)->firstOrFail();
            if ($status === 'approved') { $pedido->marcarComoPago(...); }
            if ($status === 'rejected') { $pedido->marcarComoRecusado(...); }
        });
    }
}
