<!-- as configurações de página estão layouts/app -->
@extends('layouts.app')

@section('title', 'Concursos')

<!-- corpo da página -->
@section('main')
    <!-- tudo aqui será renderizado com base no template -->

<section>

<div class="text-centralizado">
    <br>
    <h1>Prêmio Villa Diodati</h1>
    <h2>Concurso de Contos:</h2>
    <h2>PROMETEU MODERNO</h2>
    <br>
    <p>
     O Villa Diodati – Coletivo de Autores torna pública a abertura de inscrições para a antologia de contos "Prometeu Moderno". Este edital visa selecionar obras literárias inéditas que explorem o gênero Ficção Científica em suas diversas vertentes.
    </p>
    <br>

    
    <button>
        <i style="color: #ED6b86" class="bi bi-filetype-pdf"></i> EM BREVE
    </button>

    {{-- <button onclick="window.location.href='{{ Storage::url('arquivos/Prêmio\ Villa\ Diodati\ -\ Prometeu\ Moderno.pdf') }}'">
        <i style="color: #ED6b86" class="bi bi-filetype-pdf"></i> Baixe o edital aqui
    </button> --}}

    <br>
    <a href="{{ route('formPVDPM') }}">
        <button> <i class="bi bi-pen"></i> Se Inscreva Aqui </button>  
    </a>        
    
</div>

</section>




    <!-- <div class="container-caixa">

        <textarea class="minha-caixa" id="" name="" rows="20" cols="50" placeholder="">Teste e mais testes.</textarea>
    </div> -->


@endsection