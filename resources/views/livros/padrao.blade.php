<!-- as configurações de página estão layouts/app -->
@extends('layouts.app')

@section('title', 'livro')

<!-- corpo da página -->
@section('main')
<!-- tudo aqui será renderizado com base no template -->

<section style="margin-left: 5%; margin-right: 5%">

    <h1 style="font-family: 'Aesthetic'; font-size: clamp(1rem, 5vw + 1rem, 4rem); letter-spacing: 6px; text-align: left; margin-top: 30px"> {{ $livro->titulo }} </h1>

<div class="livro-container">

    <!-- variaveis PHP -->
    <?php $botao = "Compre agora" ?>    

    <div class="elemento-container-capa">   

        <div class="elemento-capa">

            @if ( $livro['titulo'] == "Noites Sem Alma")
                <img src="{{ Storage::url('capas/capaNSA.jpeg') }}" >
                <?php $contato = "https://wa.me/5511952000213?text=Olá,%20gostaria%20de%20adquirir%20a%20coletânea%20Noites%20Sem%20Alma.%20Vim%20pelo%20site%20de%20vocês." ?>       
            @endif

            @if ( $livro['titulo'] == "O Que Ficou no Escuro")
                <img src="{{ Storage::url('capas/capaOQFE.jpeg') }}" >
                <?php $contato = "https://wa.me/5511952000213?text=Olá,%20gostaria%20de%20adquirir%20a%20coletânea%20O%20que%20Ficou%20no%20Escuro.%20Vim%20pelo%20site%20de%20vocês." ?>
            @endif

            @if ( $livro['titulo'] == "O Diário da Coletora")
                <img src="{{ Storage::url('capas/capaODDC.jpeg') }}" >
                <?php $contato = "https://wa.me/5511996787049?text=Olá,%20gostaria%20de%20adquirir%20O%20Diário%20da%20Coletora.%20Vim%20pelo%20site%20de%20vocês." ?> 
            @endif

            @if ( $livro['titulo'] == "Os Segredos da Mata")
                <img src="{{ Storage::url('capas/capaOSM.jpeg') }}" >
                <?php $contato = "https://wa.me/5567996638417?text=Olá,%20gostaria%20de%20adquirir%20seu%20livro:%20Os%20Segredos%20da%20Mata.%20Vim%20pelo%20site%20de%20vocês." ?> 
            @endif

            @if ( $livro['titulo'] == "Cajado")
                <img src="{{ Storage::url('capas/capaCajado.jpeg') }}" >
                <?php $contato = "https://wa.me/556291603185?text=Olá,%20gostaria%20de%20adquirir%20seu%20livro:%20Cajado.%20Vim%20pelo%20site%20de%20vocês." ?> 
            @endif

            @if ( $livro['titulo'] == "Dedo em Riste, Verso em Prosa")
                <img src="{{ Storage::url('capas/capaDRVP.jpeg') }}" >
                <?php $contato = "https://wa.me/558699203283?text=Olá,%20gostaria%20de%20adquirir%20seu%20livro:%20Dedo%20em%20Riste,%20Verso%20em%20Prosa.%20Vim%20pelo%20site%20de%20vocês." ?> 
            @endif

            @if ( $livro['titulo'] == "Eles Pensam Que Somos Gatos")
                <img src="{{ Storage::url('capas/capaEPQSG.jpeg') }}" >
                <?php $contato = "https://wa.me/5511952000213?text=Olá,%20gostaria%20de%20adquirir%20seu%20livro:%20Eles%20Pensam%20que%20Somos%20Gatos.%20Vim%20pelo%20site%20de%20vocês." ?> 
            @endif

            @if ( $livro['titulo'] == "Noturnos")
                <img src="{{ Storage::url('capas/capaNoturnos.jpeg') }}" >
                <?php $contato = "https://wa.me/5511996787049?text=Olá,%20gostaria%20de%20adquirir%20seu%20livro:%20Noturnos.%20Vim%20pelo%20site%20de%20vocês." ?> 
            @endif

            @if ( $livro['titulo'] == "SS Misery")
                <img src="{{ Storage::url('capas/capaSSM.jpeg') }}" >
                <?php $contato = "https://wa.me/556291603185?text=Olá,%20gostaria%20de%20adquirir%20seu%20livro:%20SS%20Misery.%20Vim%20pelo%20site%20de%20vocês." ?> 
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

            <span style="margin-top:5px; font-weight: bold;" >R$ {{ $livro->preco }}</span>

            <br>
            <a href="<?php echo $contato ?>">
                <button><?php echo $botao ?></button>
            </a>
        </div>        

    </div>

    <div class="elemento-container-descricao">
        <br>
        <p style="font-size: clamp(1rem, 0.3vw + 1rem, 6rem); text-align: justify">
            {{ $livro->descricao }}
        </p>        
    </div>

</div>
</section>


@endsection