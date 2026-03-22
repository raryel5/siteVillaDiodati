<!-- as configurações de página estão layouts/app -->
@extends('layouts.app')

@section('title', 'livro')

<!-- corpo da página -->
@section('main')
<!-- tudo aqui será renderizado com base no template -->

<div class="livro-container">
    <!-- variaveis PHP -->
    <?php $botao = "Compre agora" ?>
    
    <?php
        //$id = echo $livro['id'];

        // if ( $livro['id'] == 1){
        //     $capa = 'capas/capaOSM.jpeg';
        // }
        // elseif ( $livro['id'] == 2){
        //     $capa = 'capas/capaNSA.jpeg';
        // }
        // else{
        //     $capa = 'capas/capaVazia.jpeg';
        // }
        // $capa = "{{ Storage::url('capas/capaNSA.jpeg') }}"
        $capa = "capas/capaNSA.jpeg"
    ?>

    <div class="elemento-container-capa">

        <div class="elemento-capa">
            <img src="{{ Storage::url('<? echo $capa ?>') }}" >
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

            <button style="margin-top: 5px"><?php echo $botao ?></button>
        </div>        

    </div>

    <div class="elemento-container-descricao">
        <h1 style="font-family: 'Aesthetic'; font-size: 50px; letter-spacing: 9.3px; text-align: left"> {{ $livro->titulo }} </h1>
        <br>
        <h2 style="font-size: 20px">
            {{ $livro->descricao }}
        </h2>
        
    </div>
</div>

@endsection