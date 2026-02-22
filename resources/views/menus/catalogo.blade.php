<!-- as configurações de página estão layouts/app -->
@extends('layouts.app')

@section('title', 'Catálogo')

<!-- corpo da página -->
@section('main')
    <!-- tudo aqui será renderizado com base no template -->
    
    <div class="recuo">
        <br>
        <h1 style="font-family: 'Aesthetic'; font-size: 85px">VILLA DIODATI</h1>
        <h1 style="font-size: 50px; font-weight: lighter; letter-spacing: 9.3px">Coletivo de Autores</h1>
        <br>
    </div>

    <div class="card">
        <a href="#">
            <img src="{{ Storage::url('produtos/capaNSA.jpg') }}" alt="imagem" style="height: 150px">
        </a>

        <div>
            <h1>Noites Sem Alma</h1>
            <h2>Descrição do livro</h2>
            <span>R$ XX,XX</span>
            <br>
            <button>Saiba mais</button>
        </div>
    </div>

    <div class="card">
        <a href="#">
            <img src="{{ Storage::url('produtos/capaOQFE.jpg') }}" alt="imagem" style="height: 150px">
        </a>

        <div>
            <h1>O Que Ficou no Escuro</h1>
            <h2>Descrição do livro</h2>
            <span>R$ XX,XX</span>
            <br>
            <button>Saiba mais</button>
        </div>
    </div>



    <!-- <div class="container-caixa">

        <textarea class="minha-caixa" id="" name="" rows="20" cols="50" placeholder="">Teste e mais testes.</textarea>
    </div> -->
    

@endsection