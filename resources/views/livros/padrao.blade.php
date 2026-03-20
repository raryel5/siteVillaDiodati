<!-- as configurações de página estão layouts/app -->
@extends('layouts.app')

@section('title', 'livro')

<!-- corpo da página -->
@section('main')
<!-- tudo aqui será renderizado com base no template -->


<h1> A ID passada é: {{ $id->id }} </h1>

<h2> O título do livro é: {{ $id->titulo }}. </h2>
<br>

<h2> Lista do Foreach: </h2>
<div>    
    @foreach ($catalogos as $catalogo)
    <p>
        {{ $catalogo->id }}
        {{ $catalogo->titulo }}
    </p>
    @endforeach  
</div>


    

<!-- < ?php dd($id) ?> -->




@endsection