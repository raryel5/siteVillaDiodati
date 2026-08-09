<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use MercadoPago\SDK;
use MercadoPago\Client\Payment\PaymentCaptureRequest;
use Illuminate\Http\Request;
use App\Models\Cliente;
use MercadoPago\MercadoPagoConfig;
use MercadoPago\Client\Payment\PaymentClient;


class ProcessarMpPagamento implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        $chave = config('services.mercadopago.api_key');
        SDK::setAcessToken($chave);
    }

    /**
     * Execute the job.
     */
    public function handle(Request $request): void
    {

        $chave = config('services.mercadopago.api_key');
        MercadoPagoConfig::setAccessToken($chave);

        $paymentId = (int) $request->input('data.id'); // ou do query param data.id
        $client = new PaymentClient();

        $payment = $client->get($paymentId);

        $externalReference = $payment->external_reference;
        $status = $payment->status; // approved | pending | rejected ...

        if ($status === 'approved') {

            $apoaidor = Cliente::where('id', $externalReference)->first();
            if ($apoaidor) {
                $apoaidor->payment_status = 'pago';
                $apoaidor->save();
            }
        }

    }
}
