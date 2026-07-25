<?php 

use MercadoPago\Client\Common\RequestOptions;
use MercadoPago\Client\Payment\PaymentClient;
use MercadoPago\Exceptions\MPApiException;
use MercadoPago\MercadoPagoConfig;

# Vamos capturar o json do Mercado Pago.
$body = json_decode(file_get_contents('php://input'));

# Vericamos se exist o id do pagamento
$id = $body->data->id;
$client = new PaymentClient();

# captura o pagamento
$payment = $client->get($id);

$external_reference = $payment->external_reference;
$status = $payment->status; // para aprovado = 'approved'

?>