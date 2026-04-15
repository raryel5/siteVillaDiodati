<!-- as configurações de página estão layouts/app -->
@extends('layouts.app')

@section('title', 'Inscrição')

<!-- corpo da página -->
@section('main')
<!-- tudo aqui será renderizado com base no template -->

<div class="text-centralizado">
    <br>
    <h1>Prêmio Villa Diodati</h1>
    <h2>Concurso de Contos:</h2>
    <h2>PROMETEU MODERNO</h2>
    <br>
    <p>Período de inscrições: 15/04/26 a 31/05/26 até às 23h59min (horário de Brasília).</p>
    <br>
</div>

<div class="container-form">
    <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdEVOMQ6IxKJIR5466Jivsvyoy7P5C1r9vkl99nSxcl4QnBDQ/viewform?embedded=true" width="640" height="1624" frameborder="0" marginheight="100" marginwidth="0">Carregando…</iframe>
</div>


@endsection