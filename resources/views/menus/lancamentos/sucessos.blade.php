<!-- as configurações de página estão layouts/app -->
@extends('layouts.app')

@section('title', 'Catálogo')

<!-- corpo da página -->
@section('main')
<!-- tudo aqui será renderizado com base no template -->

<!-- <section style="margin-left: 5%">
    <div class="recuo">
        <br>
        <h2 style="font-size: clamp(1rem, 1.3vw + 1rem, 6rem); letter-spacing: 4.0px">Pré-lançamento:</h2>

        <h1 style="font-size: clamp(1rem, 2.5vw + 1rem, 6rem); font-weight: lighter; letter-spacing: 9.3px">TÍTULO DO LIVRO</h1>
        <br>
        <h2>do autor Anderson José</h2>
    </div>
</section> -->

<section class="section-corpo">

<div class="text-centralizado">
    <br>
    <br>
    <p style="font-size: clamp(1rem, 2vw + 1rem, 4rem); color: #b62945; border-color: red">
        <b>SUCESSO!</b>
    </p>
    <p>Em até 24 horas enviaremos um e-mail de confirmação.</p>
    <br>
    <p>Você será redirecionado em 3 segundos...</p>

    <script>
        setTimeout(function() {
            window.location.href = "{{ route('home') }}";
        }, 3000); // 3000 milissegundos = 3 segundos
    </script>
</div>

    

</section>




@endsection