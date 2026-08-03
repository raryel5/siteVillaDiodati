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

    <p>Nome do cliente: {{ $nome = $cliente->name }}</p>

    <p>Valor total: R$ {{ $valor = $cliente->valor }}</p>

<?php

use MercadoPago\MercadoPagoConfig;
use MercadoPago\Client\Preference\PreferenceClient;
use MercadoPago\Client\Common\RequestOptions;

# Etapa 2: Defina o seu Access Token de produção ou testes
    $chave = config('services.mytoken.key');
    MercadoPagoConfig::setAccessToken($chave);

    # Para evitar pagamentos duplicados:
    $request_options = new RequestOptions();
    $request_options -> setCustomHeaders(["X-Idempotency-Key: " . uniqid()]);

    // Prepara os dados do produto
    $client = new PreferenceClient();
    $preference = $client->create([
        "notification_url" => "https://villadiodati.com.br/clientes/notificacoes",
        "items" => array(
        array(
        "id" => intval($cliente->id),
        "title" => $cliente->product,
        "quantity" => intval($cliente->quantity),
        "unit_price" => intval($cliente->valor),
        "payer" => [
                "first_name" => $cliente->name,
                "last_name"  => "Surname",
                "email"      => $cliente->email,
                "identification" => [
                    "number" => intval($cliente->cpf),
                    "type"   => "CPF"
                ],
                // "phone" => [
                //     "area_code" => "11",
                //     "number"    => "{{PHONE_NUMBER}}"
                // ],
                "address" => [
                    "street_name"    => $cliente->adress,
                    "street_number"  => intval($cliente->number),
                    "complemento"  => $cliente->complement,
                    "zip_code"       => intval($cliente->cep)
                ]
            ],
        )),
        "back_urls" => array(
            "success" => "https://villadiodati.com.br/lancamentos/sucessos",
            "failure" => "https://villadiodati.com.br/lancamentos/failures",
            "pending" => "https://villadiodati.com.br/lancamentos/pendings"
            ),

        'auto_return' => "approved",
        ],
        );


    // $preference->auto_return = "approved";

    // A URL de pagamento gerada pelo Mercado Pago
    $paymentUrl = $preference->init_point;
?>

    <a href="<?php echo $paymentUrl ?>">
        <button type="submit"> Escolher forma de pagamento </button>
    </a>


</div>

@endsection