<!-- as configurações de página estão layouts/app -->
@extends('layouts.app')

@section('title', 'Novidades')

<!-- corpo da página -->
@section('main')
    <!-- tudo aqui será renderizado com base no template -->

    <div class="tablePosition">
        <p>
            <h1>Novidades publicadas</h1>
        </p>               

        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Título</th>
                <th scope="col">Link</th>
                <th scope="col">Data</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($novidades as $novidade)
                <tr>
                    <th>{{ $novidade->id }}</th>
                    <th>{{ $novidade->title }}</th>
                    <th>{{ $novidade->slug }}</th>
                    <th>{{ $novidade->is_published }}</th>
                </tr>

            @endforeach                
            </tbody>
        </table>
    </div>

    



    <!-- <div class="container-caixa">

        <textarea class="minha-caixa" id="" name="" rows="20" cols="50" placeholder="">Teste e mais testes.</textarea>
    </div> -->
    

@endsection