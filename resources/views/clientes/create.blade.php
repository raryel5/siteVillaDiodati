<!-- as configurações de página estão layouts/app -->

@extends('layouts.app')  

@section('title', 'Inscrição')  

<!-- corpo da página -->
@section('main')
<!-- tudo aqui será renderizado com base no template -->

<?php

# Etapa 1: importar bibliotecas.
use MercadoPago\MercadoPagoConfig;
use MercadoPago\Client\Preference\PreferenceClient;
use MercadoPago\Client\Common\RequestOptions;
use MercadoPago\Webhook\WebhookSignatureValidator;
use MercadoPago\Exceptions\InvalidWebhookSignatureException;
use MercadoPago\Client\Payment\PaymentClient;
use MercadoPago\Exceptions\MPApiException;

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
      "id" => 1,
      "title" => "Livro",
      "quantity" => 1,
      "unit_price" => 50.00,
      "payer" => [
            "first_name" => "Name",
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

<!-- variaveis PHP -->
<?php
$obrigatorio = " *" 
?>

  

<div class="text-centralizado">
    <br>
    <h1>Cadastro inicial</h1>
    <br>
    <p>Prencha seus dados para cadastro e envio do material.</p>
    <br>    

<form action="{{ route('clientes-store') }}" method="POST">
    @csrf

    <!-- Dados do Cliente -->
    <div class="form-group">

        <div class="form-group">
            <label for="name" class="">Nome:</label><br>
            <input type="text" class="form-group" name="name" placeholder="Nome completo" required><b> <?php echo $obrigatorio ?> </b>
        </div>

        <div class="form-group">
            <label for="email" class="">E-mail:</label><br>
            <input type="email" class="form-group" name="email" placeholder="Endereço de e-mail" required><b> <?php echo $obrigatorio ?> </b>
        </div>

        <div class="form-group">
            <label for="email" class="">Confirme o E-mail:</label><br>
            <input type="email" class="form-group" name="email_confirmation" placeholder="Confirme o e-mail" required><b> <?php echo $obrigatorio ?> </b>
        </div>

        <div class="form-group">
            <label for="cpf" class="">CPF:</label><br>
            <input type="int" class="form-group" name="cpf" placeholder="CPF (apenas números)" required><b> <?php echo $obrigatorio ?> </b>
        </div>
        <br>

    <p class="">Endereço para envio do material</p>

        <div class="form-group">
            <label for="nameReceiver" class="">Nome do recebedor (sefor diferente do cliente):</label><br>
            <input type="text" class="form-group" name="nameReceiver" placeholder="Nome do recebedor">
        </div>

        <div class="form-group">
            <label for="adress" class="">Rua/Av:</label><br>
            <input type="text" class="form-group" name="adress" placeholder="Nome da rua ou avenida" required><b> <?php echo $obrigatorio ?> </b>
        </div>

        <div class="form-group">
            <label for="number" class="">Número:</label><br>
            <input type="int" class="form-group" name="number" placeholder="Número ou (S/N)" required><b> <?php echo $obrigatorio ?> </b>
        </div>

        <div class="form-group">
            <label for="complement" class="">Complemento:</label><br>
            <input type="text" class="form-group" name="complement" placeholder="Complemento (se houver)">
        </div>

        <div class="form-group">
            <label for="city" class="">Cidade:</label><br>
            <input type="text" class="form-group" name="city" placeholder="Cidade" required><b> <?php echo $obrigatorio ?> </b>
        </div>

        <div class="form-group">
            <label for="state" class="">Estado:</label><br>
            <input type="text" class="form-group" name="state" placeholder="Estado (apenas sigla)" required><b class="">*</b>
        </div>

        <div class="form-group">
            <label for="cep" class="">CEP:</label><br>
            <input type="int" class="form-group" name="cep" placeholder="CEP (apenas números)" required><b> <?php echo $obrigatorio ?> </b>
        </div>

        <p style="font-size: clamp(1rem, 0.1vw + 1rem, 6rem)"> * Itens obrigatórios</p>

        <br>   
        <input type="hidden" name="value" value="55.00">
        <br>    

        <div class="form-group">
            <a href="<?php echo $paymentUrl ?>" class="">
                <button type="submit"> Ir para pagamento </button>
            </a>
                   
        </div>

    </div>

  

<!-- Detalhes do Pagamento -->

<!-- <p class="">Ir para pagamento</p> -->

<!-- <select name="payment_method_id" required>

<option value="pix">Pix</option>

<option value="bolbradesco">Boleto Bancário</option>

</select> -->

  

@error('email')

<span style="color: red">{{ $message }}</span>

@enderror

</form>

  

</div>

  
  
  

@endsection