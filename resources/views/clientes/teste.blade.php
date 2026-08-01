<!-- as configurações de página estão layouts/app -->
@extends('layouts.app')

@section('title', 'TESTE')

<!-- corpo da página -->
@section('main')
<!-- tudo aqui será renderizado com base no template -->

<div class="text-centralizado">

    <h1>Testes</h1>

    <p> Nome: {{ $cliente->name }} </p>
    <p> Endereço de e-mail: {{ $cliente->email }} </p>

    <!-- <form action=" route('cliente-teste') " method="POST">
        <label for="usuario">Nome de Usuário:</label>
        <input type="text" id="usuario" name="nome_usuario">
        <button type="submit">Enviar</button>
    </form> -->

    <!-- @for ($i = 0; $i < 10; $i++)
        The current value is {{ $i }}
    @endfor -->


    <!-- < ?php
        // arquivo: processa.php

        // 1. Verifica se a requisição foi realmente do tipo POST
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            // 2. Pega o valor do input 'nome_usuario'
            $usuario = $_POST['nome_usuario'];
            
            // 3. Exibe o resultado (com proteção básica contra XSS)
            echo "O usuário digitado foi: " . htmlspecialchars($usuario);
        }
    ?> -->


</div>




@endsection