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

<div class="container">
    <div class="items1">

        <div class="item">
            <div class="produto">
                <a href="#">
                    <img src="{{ Storage::url('produtos/capaNSA.jpeg') }}">
                </a>
            </div>

            <h1>Noites Sem Alma</h1>
            <h2>Descrição do livro</h2>
            <span>R$ XX,XX</span>
            <br>
            <button>Saiba mais</button>
            
        </div>
    
        <div class="item">
            <div class="produto">
                <a href="#">
                    <img src="{{ Storage::url('produtos/capaOQFE.jpeg') }}">
                </a>
            </div>

            <h1>O Que Ficou no Escuro</h1>
            <h2>Descrição do livro</h2>
            <span>R$ XX,XX</span>
            <br>
            <button>Saiba mais</button>
            
        </div>
    </div>

</div>

<!-- 

LIVROS DOS MEMBROS DO COLETIVO

-->

<div class="recuo">
    <br>
    <h1 style="font-size: 50px; font-weight: lighter; letter-spacing: 9.3px">Publicações dos autores</h1>
    <br>
</div>

<div class="container">
    <div class="items2">

        <div class="item">
            <div class="produto">
                <a href="#">
                    <img src="{{ Storage::url('produtos/capaCajado.jpeg') }}">
                </a>
            </div>

            <h1>Cajado</h1>
            <h2>Descrição do livro</h2>
            <span>R$ XX,XX</span>
            <br>
            <button>Saiba mais</button>
            
        </div>
    
        <div class="item">
            <div class="produto">
                <a href="#">
                    <img src="{{ Storage::url('produtos/capaDRVP.jpeg') }}">
                </a>
            </div>

            <h1>Dedo em Riste, Verso em Prosa</h1>
            <h2>Descrição do livro</h2>
            <span>R$ XX,XX</span>
            <br>
            <button>Saiba mais</button>
            
        </div>

        <div class="item">
            <div class="produto">
                <a href="#">
                    <img src="{{ Storage::url('produtos/capaEPQSG.jpeg') }}">
                </a>
            </div>

            <h1>Eles Pensam Que Somos Gatos</h1>
            <h2>Descrição do livro</h2>
            <span>R$ XX,XX</span>
            <br>
            <button>Saiba mais</button>
            
        </div>

        <div class="item">
            <div class="produto">
                <a href="#">
                    <img src="{{ Storage::url('produtos/capaNoturnos.jpeg') }}">
                </a>
            </div>

            <h1>Noturnos</h1>
            <h2>Descrição do livro</h2>
            <span>R$ XX,XX</span>
            <br>
            <button>Saiba mais</button>
            
        </div>

        <div class="item">
            <div class="produto">
                <a href="#">
                    <img src="{{ Storage::url('produtos/capaOSM.jpeg') }}">
                </a>
            </div>

            <h1>Os Segredos da Mata</h1>
            <h2>Descrição do livro</h2>
            <span>R$ XX,XX</span>
            <br>
            <button>Saiba mais</button>
            
        </div>

        <div class="item">
            <div class="produto">
                <a href="#">
                    <img src="{{ Storage::url('produtos/capaSSM.jpeg') }}">
                </a>
            </div>

            <h1>SS Misery</h1>
            <h2>Descrição do livro</h2>
            <span>R$ XX,XX</span>
            <br>
            <button>Saiba mais</button>
            
        </div>

    </div>
</div>
    



    <!-- <div class="container-caixa">

        <textarea class="minha-caixa" id="" name="" rows="20" cols="50" placeholder="">Teste e mais testes.</textarea>
    </div> -->
    

@endsection