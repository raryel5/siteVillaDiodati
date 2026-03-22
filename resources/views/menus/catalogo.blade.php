<!-- as configurações de página estão layouts/app -->
@extends('layouts.app')

@section('title', 'Catálogo')

<!-- corpo da página -->
@section('main')
<!-- tudo aqui será renderizado com base no template -->

<div class="recuo">
    <br>
    <h1 style="font-size: 50px; font-weight: lighter; letter-spacing: 9.3px">Nossas Coletâneas</h1>
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
                <a href="{{ route('livros', $id=2) }}">
                    <img src="{{ Storage::url('capas/capaNSA.jpeg') }}">
                </a>
            </div>

            <h1>Noites Sem Alma</h1>
            <h2>vários autores, 2024</h2>
            <span>R$ 45,00</span>
            <br>
            <button><?php echo $botao ?></button>
        </div>
        

        <div class="item">
            <div class="produto">
                <a href="{{ route('livros', $id=3) }}">
                    <img src="{{ Storage::url('capas/capaOQFE.jpeg') }}">
                </a>
            </div>

            <h1>O Que Ficou no Escuro</h1>
            <h2>vários autores, 2025</h2>
            <span>R$ 50,00</span>
            <br>
            <button><?php echo $botao ?></button>

        </div>

        <div class="item">
            <div class="produto">
                <a href="{{ route('livros', $id=4) }}">
                    <img src="{{ Storage::url('capas/capaVazia.jpeg') }}">
                </a>
            </div>

            <h1>O Diário da Coletora</h1>
            <h2>Renan Santana, AAAA</h2>
            <span>R$ 55,00</span>
            <br>
            <button><?php echo $botao ?></button>

        </div>

    </div>
</div>

<!-- 

CAPAS DOS OUTROS LIVROS

-->

<div class="recuo">
    <br>
    <h1 style="font-size: 50px; font-weight: lighter; letter-spacing: 9.3px">Outras publicações de nossos autores</h1>
    <br>
</div>

<div class="container">
    <div class="items2">

        <div class="item">
            <div class="produto">
                <a href="{{ route('livros', $id=5) }}">
                    <img src="{{ Storage::url('capas/capaCajado.jpeg') }}">
                </a>
            </div>

            <h1>Cajado</h1>
            <h2>Assores, AAAA</h2>
            <span>R$ XX,XX</span>
            <br>
            <button><?php echo $botao ?></button>

        </div>

        <div class="item">
            <div class="produto">
                <a href="#">
                    <img src="{{ Storage::url('capas/capaDRVP.jpeg') }}">
                </a>
            </div>

            <h1>Dedo em Riste, Verso em Prosa</h1>
            <h2>Israel de Oliveira Costa, AAAA</h2>
            <span>R$ XX,XX</span>
            <br>
            <button><?php echo $botao ?></button>

        </div>

        <div class="item">
            <div class="produto">
                <a href="#">
                    <img src="{{ Storage::url('capas/capaEPQSG.jpeg') }}">
                </a>
            </div>

            <h1>Eles Pensam Que Somos Gatos</h1>
            <h2>Luciana Cunha Pereira, AAAA</h2>
            <span>R$ XX,XX</span>
            <br>
            <button><?php echo $botao ?></button>

        </div>

        <div class="item">
            <div class="produto">
                <a href="#">
                    <img src="{{ Storage::url('capas/capaNoturnos.jpeg') }}">
                </a>
            </div>

            <h1>Noturnos</h1>
            <h2>Renan Santana, 2023</h2>
            <span>R$ XX,XX</span>
            <br>
            <button><?php echo $botao ?></button>

        </div>

        <div class="item">
            <div class="produto">
                <a href="#">
                    <img src="{{ Storage::url('capas/capaOSM.jpeg') }}">
                </a>
            </div>

            <h1>Os Segredos da Mata</h1>
            <h2>Taís Turaça Arantes & Renan Aryel, 2022</h2>
            <span>R$ XX,XX</span>
            <br>
            <button><?php echo $botao ?></button>

        </div>

        <div class="item">
            <div class="produto">
                <a href="#">
                    <img src="{{ Storage::url('capas/capaSSM.jpeg') }}">
                </a>
            </div>

            <h1>SS Misery</h1>
            <h2>Assores, AAAA</h2>
            <span>R$ XX,XX</span>
            <br>
            <button><?php echo $botao ?></button>

        </div>

    </div>
</div>




<!-- <div class="container-caixa">

        <textarea class="minha-caixa" id="" name="" rows="20" cols="50" placeholder="">Teste e mais testes.</textarea>
    </div> -->


@endsection