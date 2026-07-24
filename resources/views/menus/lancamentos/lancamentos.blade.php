<!-- as configurações de página estão layouts/app -->
@extends('layouts.app')

@section('title', 'Catálogo')

<!-- corpo da página -->
@section('main')
<!-- tudo aqui será renderizado com base no template -->

<?php 

use MercadoPago\MercadoPagoConfig;
use MercadoPago\Client\Preference\PreferenceClient;

// Defina o seu Access Token de produção ou testes
MercadoPagoConfig::setAccessToken("APP_USR-1352144246141107-072322-f6473b0062b63e09dc1265a0b79ac662-3548270378");

// Prepara os dados do produto
$client = new PreferenceClient();
$preference = $client->create([
    "items" => [
        [
            "title" => "livro01",
            "quantity" => 1,
            "unit_price" => 50.00 // Valor do produto
        ]
    ],
    "back_urls" => [
        // "success" => "{{ route('lancamentos.sucessos'}}",
        // "failure" => "{{ route('lancamentos.failures'}}",
        // "pending" => "{{ route('lancamentos.pendings'}}"
        "success" => "https://seusite.com",
        "failure" => "https://seusite.com",
        "pending" => "https://seusite.com"
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