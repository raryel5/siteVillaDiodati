<!-- as configurações de página estão layouts/app -->
@extends('layouts.app')

@section('title', 'NSA')

<!-- corpo da página -->
@section('main')
<!-- tudo aqui será renderizado com base no template -->

<div class="recuo">
    <br>
    <h1 style="font-family: 'Aesthetic'; font-size: 85px">VILLA DIODATI</h1>
    <h1 style="font-size: 50px; font-weight: lighter; letter-spacing: 9.3px">Coletivo de Autores</h1>
    <br>
</div>

<!-- 

    PUBLICAÇÕES DO COLETIVO

-->
<div class="container">
    <div class="items1">

        <!-- variaveis PHP -->
        <?php $botao = "Compre agora" ?>

        <div class="item">
            <div class="produto">
                <a href="#">
                    <img src="{{ Storage::url('capas/capaNSA.jpeg') }}">
                </a>
            </div>

            <h1>Noites Sem Alma</h1>
            <h2>vários autores, 2024</h2>
            <span>R$ 45,00</span>
            <br>
            <button><?php echo $botao ?></button>

        </div>

    </div>
</div>




<!-- <div class="container-caixa">

        <textarea class="minha-caixa" id="" name="" rows="20" cols="50" placeholder="">Teste e mais testes.</textarea>
    </div> -->


@endsection