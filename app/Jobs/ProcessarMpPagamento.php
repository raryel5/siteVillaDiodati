<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use MercadoPago\SDK;
use MercadoPago\Client\Payment\PaymentCaptureRequest;
use Illuminate\Http\Request;
use App\Models\Cliente;




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
        $id = $request->input(key: 'data')['id'];

        $pago = Payment::get($id);
        // $pago = PaymentCaptureRequest::get($id);

        if ($pago->status === 'approved')
            {
                // $externalReference = $pago->external_reference;
                $id = $pago->external_reference;
                $compra = Cliente::find($id);
                $compra->payment_status = 'pago';
                $compra->save();
            }
    }
}
