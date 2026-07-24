<?
    // $backUrls = array(
    //     // 'success' => route('mercadopago.success'),
    //     // 'failure' => route('mercadopago.failed')
    //     "success" => "{{ route('lancamentos.sucessos'}}",
    //     "failure" => "{{ route('lancamentos.failures'}}",
    //     "pending" => "{{ route('lancamentos.pendings'}}"
    // );

require 'vendor/autoload.php';

use MercadoPago\MercadoPagoConfig;
use MercadoPago\Client\Preference\PreferenceClient;
use MercadoPago\Exceptions\MPApiException;

// Configurar o token de acesso
MercadoPagoConfig::setAccessToken("APP_USR-1352144246141107-072322-f6473b0062b63e09dc1265a0b79ac662-3548270378");

$client = new PreferenceClient();

try {
    $preference = $client->create([
        "items" => [
            [
                "title" => "Nome do Produto",
                "quantity" => 1,
                "unit_price" => 100.00
            ]
        ]
    ]);
    
    // Link de pagamento para redirecionar o cliente
    $paymentLink = $preference->init_point;
    echo "Link de pagamento: <a href='{$paymentLink}'>Pagar agora</a>";

} catch (MPApiException $e) {
    echo "Erro: " . $e->getApiResponse()->getContent();
}

?>