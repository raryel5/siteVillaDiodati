<!-- as configurações de página estão layouts/app -->
@extends('layouts.app')

@section('title', 'livro')

<!-- corpo da página -->
@section('main')
<!-- tudo aqui será renderizado com base no template -->

<section style="margin-left: 5%">
<div class="livro-container">
    <!-- variaveis PHP -->
    <?php $botao = "Compre agora" ?>

    <div class="elemento-container-capa">

        <div class="elemento-capa">

            @if ( $livro['titulo'] == "Noites Sem Alma")
                <img src="{{ Storage::url('capas/capaNSA.jpeg') }}" >
            @endif

            @if ( $livro['titulo'] == "O Que Ficou no Escuro")
                <img src="{{ Storage::url('capas/capaOQFE.jpeg') }}" >
            @endif

            @if ( $livro['titulo'] == "O Diário da Coletora")
                <img src="{{ Storage::url('capas/capaODDC.jpeg') }}" >
            @endif

            @if ( $livro['titulo'] == "Os Segredos da Mata")
                <img src="{{ Storage::url('capas/capaOSM.jpeg') }}" >
            @endif

            @if ( $livro['titulo'] == "Cajado")
                <img src="{{ Storage::url('capas/capaCajado.jpeg') }}" >
            @endif

            @if ( $livro['titulo'] == "Dedo em Riste, Verso em Prosa")
                <img src="{{ Storage::url('capas/capaDRVP.jpeg') }}" >
            @endif

            @if ( $livro['titulo'] == "Eles Pensam Que Somos Gatos")
                <img src="{{ Storage::url('capas/capaEPQSG.jpeg') }}" >
            @endif

            @if ( $livro['titulo'] == "Noturnos")
                <img src="{{ Storage::url('capas/capaNoturnos.jpeg') }}" >
            @endif

            @if ( $livro['titulo'] == "SS Misery")
                <img src="{{ Storage::url('capas/capaSSM.jpeg') }}" >
            @endif
        </div>    

        <div class="elemento-capa-desc">
            <h1>{{ $livro->autor }}</h1>

            <h2>
                Ano: {{ $livro->ano }}
                <br>

                ISBN: {{ $livro->isbn }}
                <br>

                Qnt. páginas: {{ $livro->numberPages }}
                <br>
            </h2>

            <span style="margin-top:5px; font-weight: bold" >R$ {{ $livro->preco }}</span>
            <br>

            <button><?php echo $botao ?></button>
        </div>        

    </div>

    <div class="elemento-container-descricao">
        <h1 style="font-family: 'Aesthetic'; font-size: clamp(1rem, 5vw + 1rem, 4rem);letter-spacing: 6px; text-align: left"> {{ $livro->titulo }} </h1>

        <br>
        <p style="font-size: clamp(1rem, 0.3vw + 1rem, 6rem); text-align: justify">
            {{ $livro->descricao }}
        </p>        
    </div>

</div>
</section>


@endsection