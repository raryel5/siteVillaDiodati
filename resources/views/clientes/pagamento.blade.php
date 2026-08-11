<!-- as configurações de página estão layouts/app -->
@extends('layouts.app')

@section('title', 'pagamento')

<!-- corpo da página -->
@section('main')
<!-- tudo aqui será renderizado com base no template -->

<div class="text-centralizado">
    <br>
    <h2>Cadastro realizado com sucesso.</h2>
    <br>

    <p>Nome do cliente: {{ $cliente->firstname }}</p>

    <p>Valor total: R$ {{ $cliente->valor }}</p>

<?php

$id = $cliente->id;
$nome = $cliente->firstname;
$surname = $cliente->surname;
$email = $cliente->email;
$product = $cliente->product;
$quantity = $cliente->quantity;
$valor = $cliente->valor;
$cpf = $cliente->cpf;

use MercadoPago\MercadoPagoConfig;
use MercadoPago\Client\Preference\PreferenceClient;
use MercadoPago\Client\Common\RequestOptions;

# Etapa 2: Defina o seu Access Token de produção ou testes
    $chave = config('services.mercadopago.api_key');
    MercadoPagoConfig::setAccessToken($chave);

    # Para evitar pagamentos duplicados:
    $request_options = new RequestOptions();
    $request_options -> setCustomHeaders(["X-Idempotency-Key: " . uniqid()]);

    // Prepara os dados do produto

    $client = new PreferenceClient();

    $preference = $client->create([
    "notification_url"    => "https://villadiodati.com.br/clientes/notificacoes",
    "external_reference"  => (string) $id,

    "items" => [[
        "id"         => (string) $id,
        "title"      => $product,
        "quantity"   => (int) $quantity,
        "unit_price" => (float) $valor,
        "description"=> "Venda de livro impresso",
    ]],

    "back_urls" => [
        "success" => "https://villadiodati.com.br/lancamentos/sucessos",
        "failure" => "https://villadiodati.com.br/lancamentos/failures",
        "pending" => "https://villadiodati.com.br/lancamentos/pendings",
    ],

    "auto_return" => "approved",
    ]);

    // A URL de pagamento gerada pelo Mercado Pago
    $paymentUrl = $preference->init_point;
?>

    <a href="<?php echo $paymentUrl ?>">
        <button type="submit">Escolher forma de pagamento</button>
    </a>


</div>

@endsection