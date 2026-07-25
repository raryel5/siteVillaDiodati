<!-- as configurações de página estão layouts/app -->
@extends('layouts.app')

@section('title', 'lançamentos')

<!-- corpo da página -->
@section('main')
<!-- tudo aqui será renderizado com base no template -->

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


<!-- <section style="margin-left: 5%">
    <div class="recuo">
        <br>
        <h2 style="font-size: clamp(1rem, 1.3vw + 1rem, 6rem); letter-spacing: 4.0px">Pré-lançamento:</h2>

        <h1 style="font-size: clamp(1rem, 2.5vw + 1rem, 6rem); font-weight: lighter; letter-spacing: 9.3px">TÍTULO DO LIVRO</h1>
        <br>
        <h2>do autor Anderson José</h2>
    </div>
</section> -->

<div class="text-centralizado">
    <br>
    <br>
    <p style="font-size: clamp(1rem, 2vw + 1rem, 4rem); color: #b62945; border-color: red">
        <b>ATENÇÃO!</b>
    </p>
    <br>
    <p style="font-size: clamp(1rem, 2vw + 1rem, 4rem); color: #b62945; border-color: red">
        <b>Página em construção.</b>
    </p>
    <br>
    <p style="font-size: clamp(1rem, 2vw + 1rem, 4rem); color: #b62945; border-color: red">
        <b>Não clique em nada abaixo!</b>
    </p>
</div>

<section class="section-corpo">

    <div class='recuo' style="width: 75%; line-height: 35px; align-items: center">
        <br>
        <h2 style="font-size: clamp(1rem, 1.3vw + 1rem, 6rem); letter-spacing: 4.0px">Pré-lançamento:</h2>

        <h1 style="font-size: clamp(1rem, 2.5vw + 1rem, 6rem); font-weight: lighter; letter-spacing: 9.3px">TÍTULO DO LIVRO</h1>
        <br>
        <h2>do autor Anderson José</h2>
    </div>

    <div class="flex-servicos">

        <div class="card-servico">
            <div class="corpo-servico">
                <div class="servico-foto">
                    <img src="{{ Storage::url('lancamentos/card01.jpeg') }}" style="max-width: 100%; display: block">
                </div>
            </div>

        </div>

        <div class="card-servico">
            <div class="title-servico">
                <h1>Dias restantes</h1>
                <h2 class="">XX dias</h2>
                <h3 class="">R$ 55,00</h3>             
            </div>

            <a href="<?php echo $paymentUrl ?>">
                <button>Compre aqui 1</button>
            </a>
            <br>
            <br>

            <a href="#">
                <button>Compre aqui 2</button>
            </a>

        </div>    
    </div>

    <div class="flex-servicos">
        <div class="servico-desc">
            <h1 class="">SINOPSE</h1>
            <br>
            <p><?php echo fake()->paragraphs(3, true); ?></p>
            <br>

            <h1 class="">SOBRE O AUTOR</h1>
            <br>
            <p><?php echo fake()->paragraphs(3, true); ?></p>
            <br>

            <h1 class="">CRONOGRAMA</h1>
            <br>
            <p><?php echo fake()->paragraphs(3, true); ?></p>
            <br>
        </div>

    </div>



    

</section>




@endsection