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
    <p>O Villa Diodati – Coletivo de Autores torna pública a abertura do edital de inscrições para o primeiro Prêmio Villa Diodati - Prometeu Moderno. Este edital visa selecionar contos inéditos que explorem o gênero Ficção Científica em suas diversas vertentes.</p>
    <p>Em 2026, o Coletivo inaugura o Prêmio Villa Diodati — Prometeu Moderno, dedicado a reconhecer obras e vozes da literatura independente. Afinal, foi Prometeu quem ousou roubar o fogo dos deuses e entregá-lo aos homens, pagando com o próprio corpo o preço da iluminação. Séculos depois, naquelas noites que inspiraram a criação deste coletivo, Mary Shelley imaginou uma criatura formada de fragmentos, nascia ali o seu Prometeu Moderno. O prêmio nasce como um gesto de reconhecimento de que toda escrita independente tem algo desse impulso, a coragem de criar e de dar vida ao que ainda não existe, mesmo quando o caminho é difícil.</p>
    <p>Saiba mais no edital clicando no botão abaixo.</p>
    <br>
    <p>Período de inscrições: 15/04/26 a 31/05/26 até às 23h59min (horário de Brasília).</p>
    <br>
    
    {{-- <button style="font-size: clamp(1rem, 0.2vw + 1rem, 4rem)">
        <i style="color: #ED6b86" class="bi bi-filetype-pdf"></i> EM BREVE
    </button> --}}

    <a onclick="window.location.href='{{ Storage::url('arquivos/PrêmioVillaDiodati-PrometeuModerno-EditalOficial.pdf') }}'">
        <button style="font-size: clamp(1rem, 0.2vw + 1rem, 4rem)">
        <i style="color: #ED6b86" class="bi bi-filetype-pdf"></i> Baixe o Edital Aqui
        </button>
    </a>

    <br>
    <a href="{{ route('formPVDPM') }}">
        <button style="font-size: clamp(1rem, 0.2vw + 1rem, 4rem)"> <i class="bi bi-pen"></i> Se Inscreva Aqui </button>  
    </a>        
    
</div>

</section>




    <!-- <div class="container-caixa">

        <textarea class="minha-caixa" id="" name="" rows="20" cols="50" placeholder="">Teste e mais testes.</textarea>
    </div> -->


@endsection