<!-- as configurações de página estão layouts/app -->
@extends('layouts.app')

@section('title', 'pagamento')

<!-- corpo da página -->
@section('main')
<!-- tudo aqui será renderizado com base no template -->

<div class="text-centralizado">
    
    <p>Cadastro realizado com sucesso.</p>

    <p>Dados: {{ $nome = $cliente->name }}</p>

    <p>
        Nome: {{ $nome }}
    </p>

    <p>{{ $valor = $cliente->valor }}</p>

    <p>
        <?php
            echo $valor;
        ?>
    </p>



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
        // "notification_url" => "https://villadiodati.com.br/clientes/notificacoes",
        "items" => array(
        array(
        "id" => 1,
        "title" => "Livro",
        "quantity" => 1,
        "unit_price" => intval($valor),
        "payer" => [
                "first_name" => "Nome",
                "last_name"  => "Surname",
                "email"      => "{{EMAIL}}",
                "identification" => [
                    "number" => "{{DOCUMENT_NUMBER}}",
                    "type"   => "CPF"
                ],
                "phone" => [
                    "area_code" => "11",
                    "number"    => "{{PHONE_NUMBER}}"
                ],
                "address" => [
                    "street_name"    => "Av. das Nações Unidas",
                    "street_number"  => "3003",
                    "complemento"  => "complemento",
                    "zip_code"       => "206233-2002"
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
        <button type="submit"> Pague agora </button>
    </a>


</div>

@endsection