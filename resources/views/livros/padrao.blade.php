<!-- as configurações de página estão layouts/app -->
@extends('layouts.app')

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
                @section('title', $livro['titulo'])
                @section('description', 'Uma coletânea de estórias de terror.')
                @section('image', asset('storage/capas/capaNSA.jpeg'))
            @endif

            @if ( $livro['titulo'] == "O Que Ficou no Escuro")
                <img src="{{ Storage::url('capas/capaOQFE.jpeg') }}" >
                <?php $contato = "https://wa.me/5511952000213?text=Olá,%20gostaria%20de%20adquirir%20a%20coletânea%20O%20que%20Ficou%20no%20Escuro.%20Vim%20pelo%20site%20de%20vocês." ?>
                @section('title', $livro['titulo'])
                @section('description', 'Uma coletânea de estórias de mistério.')
                @section('image', asset('storage/capas/capaOQFE.jpeg'))
            @endif

            @if ( $livro['titulo'] == "O Diário da Coletora")
                <img src="{{ Storage::url('capas/capaODDC.jpeg') }}" >
                <?php $contato = "https://wa.me/5511996787049?text=Olá,%20gostaria%20de%20adquirir%20O%20Diário%20da%20Coletora.%20Vim%20pelo%20site%20de%20vocês." ?>
                @section('title', $livro['titulo'])
                @section('description', 'Nestas páginas desdobram-se relatos profundos e emocionantes que capturam a essência da vida e da morte.')
                @section('image', asset('storage/capas/capaODDC.jpeg'))
            @endif

            @if ( $livro['titulo'] == "Os Segredos da Mata")
                <img src="{{ Storage::url('capas/capaOSM.jpeg') }}" >
                <?php $contato = "https://wa.me/5567996638417?text=Olá,%20gostaria%20de%20adquirir%20seu%20livro:%20Os%20Segredos%20da%20Mata.%20Vim%20pelo%20site%20de%20vocês." ?>
                @section('title', $livro['titulo'])
                @section('description', 'A trama narra as aventuras de Juliana, uma menina de 12 anos, que precisa encarar muitos desafios.')
                @section('image', asset('storage/capas/capaOSM.jpeg'))
            @endif

            @if ( $livro['titulo'] == "Cajado")
                <img src="{{ Storage::url('capas/capaCajado.jpeg') }}" >
                <?php $contato = "https://wa.me/556291603185?text=Olá,%20gostaria%20de%20adquirir%20seu%20livro:%20Cajado.%20Vim%20pelo%20site%20de%20vocês." ?>
                @section('title', $livro['titulo'])
                @section('description', 'Em um pequeno vilarejo, no íntimo da floresta, fé e rancor se contrapõem às vésperas da mais importante e esperada celebração do local. Quando Sett, um participativo e respeitado integrante da comunidade, vê seus objetivos em risco, ele é obrigado a decidir entre sangue e destino.')
                @section('image', asset('storage/capas/capaCajado.jpeg'))
            @endif

            @if ( $livro['titulo'] == "Dedo em Riste, Verso em Prosa")
                <img src="{{ Storage::url('capas/capaDRVP.jpeg') }}" >
                <?php $contato = "https://wa.me/558699203283?text=Olá,%20gostaria%20de%20adquirir%20seu%20livro:%20Dedo%20em%20Riste,%20Verso%20em%20Prosa.%20Vim%20pelo%20site%20de%20vocês." ?>
                @section('title', $livro['titulo'])
                @section('description', 'Coletânea de 15 contos que exploram, com sensibilidade e crítica, as nuances do comportamento humano. A obra transita entre o cotidiano e o simbólico, trazendo narrativas curtas, intensas e provocativas, que convidam o leitor à reflexão sobre conflitos, ironias e experiências humanas universais.')
                @section('image', asset('storage/capas/capaDRVP.jpeg'))
            @endif

            @if ( $livro['titulo'] == "Eles Pensam Que Somos Gatos")
                <img src="{{ Storage::url('capas/capaEPQSG.jpeg') }}" >
                <?php $contato = "https://wa.me/5511952000213?text=Olá,%20gostaria%20de%20adquirir%20seu%20livro:%20Eles%20Pensam%20que%20Somos%20Gatos.%20Vim%20pelo%20site%20de%20vocês." ?>
                @section('title', $livro['titulo'])
                <!-- @section('description', 'Adcionar descriçaõ aqui.') -->
                @section('image', asset('storage/capas/capaEPQSG.jpeg'))
            @endif

            @if ( $livro['titulo'] == "Noturnos")
                <img src="{{ Storage::url('capas/capaNoturnos.jpeg') }}" >
                <?php $contato = "https://wa.me/5511996787049?text=Olá,%20gostaria%20de%20adquirir%20seu%20livro:%20Noturnos.%20Vim%20pelo%20site%20de%20vocês." ?>
                @section('title', $livro['titulo'])
                @section('description', 'Na obscuridade das noites que recaem sobre a cidade de Monte Hill, uma força maligna se oculta, prenunciando a chegada iminente do horror. Entre os habitantes da cidade, encontra-se Allan Jones, um jovem professor assombrado por criaturas que emergem dos abismos mais tenebrosos de seus pesadelos.')
                @section('image', asset('storage/capas/capaNoturnos.jpeg'))
            @endif

            @if ( $livro['titulo'] == "SS Misery")
                <img src="{{ Storage::url('capas/capaSSM.jpeg') }}" >
                <?php $contato = "https://wa.me/556291603185?text=Olá,%20gostaria%20de%20adquirir%20seu%20livro:%20SS%20Misery.%20Vim%20pelo%20site%20de%20vocês." ?>
                @section('title', $livro['titulo'])
                @section('description', 'Sal, sol, dois homens e um bote. Quando Severo e Maximiano se encontram perdidos em alto-mar, os dois precisam unir forças para que suas vidas sejam restauradas. Em meio às dificuldades, ambos precisarão entender um ao outro para garantir a sobrevivência e, quem sabe, a sanidade.')
                @section('image', asset('storage/capas/capaSSM.jpeg'))
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