<!-- as configurações de página estão layouts/app -->
@extends('layouts.app')

@section('title', 'NSA')

<!-- corpo da página -->
@section('main')
<!-- tudo aqui será renderizado com base no template -->


    <div class="tablePosition">
        <p>
            <h1>Livros publicados</h1>
        </p>               

        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Título</th>
                <th scope="col">Autor</th>
                <th scope="col">Preço</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($catalogos as $livro)
                <tr>
                    <th>{{ $livro->id }}</th>
                    <th>{{ $livro->titulo }}</th>
                    <th>{{ $livro->autor }}</th>
                    <th>{{ $livro->preco }}</th>
                </tr>

            @endforeach      
            </tbody>
        </table>
    </div>

<!-- <div class="container-caixa">

        <textarea class="minha-caixa" id="" name="" rows="20" cols="50" placeholder="">Teste e mais testes.</textarea>
    </div> -->


@endsection