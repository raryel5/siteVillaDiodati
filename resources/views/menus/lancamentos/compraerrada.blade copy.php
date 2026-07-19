<!-- as configurações de página estão layouts/app -->
@extends('layouts.app')

@section('title', 'Catálogo')

<!-- corpo da página -->
@section('main')
<!-- tudo aqui será renderizado com base no template -->

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

            <a href="#">
                <button>Compre aqui</button>
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