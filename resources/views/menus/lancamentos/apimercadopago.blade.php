<?php 

use MercadoPago\MercadoPagoConfig;
use MercadoPago\Client\Preference\PreferenceClient;

// Defina o seu Access Token de produção ou testes
MercadoPagoConfig::setAccessToken("APP_USR-5818720173247021-071618-266aa7caee7cccf205b95edd2e4eaeaf-154774907");

// Prepara os dados do produto
$client = new PreferenceClient();
$preference = $client->create([
    "items" => [
        [
            "id" => 1,
            "title" => "livro",
            "quantity" => 1,
            "unit_price" => 3.00 // Valor do produto
        ]
    ],
    "back_urls" => [
        // "success" => "{{ route('lancamentos.sucessos'}}",
        // "failure" => "{{ route('lancamentos.failures'}}",
        // "pending" => "{{ route('lancamentos.pendings'}}"
        "success" => "https://villadiodati.com.br/lancamentos/sucessos",
        "failure" => "https://villadiodati.com.br/lancamentos/failures",
        "pending" => "https://villadiodati.com.br/lancamentos/pendings"
    ],
    "auto_return" => "approved",
]);

// A URL de pagamento gerada pelo Mercado Pago
$paymentUrl = $preference->init_point;

?>