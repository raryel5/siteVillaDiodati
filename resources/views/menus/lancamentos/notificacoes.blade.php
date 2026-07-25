<?php 

use MercadoPago\Webhook\WebhookSignatureValidator;
use MercadoPago\Exceptions\InvalidWebhookSignatureException;

// TURORIAL MERCADO PAGO: https://www.mercadopago.com.br/developers/pt/docs/checkout-pro/payment-notifications#editor_1

try {
    WebhookSignatureValidator::validate(
        $_SERVER['HTTP_X_SIGNATURE'],
        $_SERVER['HTTP_X_REQUEST_ID'],
        $_GET['data_id'],
        $secret
    );
    http_response_code(200);
} catch (InvalidWebhookSignatureException $e) {
    http_response_code(401);
}

MercadoPago\SDK::setAccessToken("ENV_ACCESS_TOKEN");
 switch($_POST["type"]) {
     case "payment":
         $payment = MercadoPago\Payment::find_by_id($_POST["data"]["id"]);
         break;
     case "plan":
         $plan = MercadoPago\Plan::find_by_id($_POST["data"]["id"]);
         break;
     case "subscription":
         $plan = MercadoPago\Subscription::find_by_id($_POST["data"]["id"]);
         break;
     case "invoice":
         $plan = MercadoPago\Invoice::find_by_id($_POST["data"]["id"]);
         break;
     case "point_integration_wh":
         // $_POST contiene la informaciòn relacionada a la notificaciòn.
         break;
 }
?>