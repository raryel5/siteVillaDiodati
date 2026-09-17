<!-- as configurações de página estão layouts/app -->
@extends('layouts.app')

@section('title', 'Entrevistas')

<!-- corpo da página -->
@section('main')
    <!-- tudo aqui será renderizado com base no template -->

<section class="section-entrevista-corpo">

    <div class="entrevista-text-left">
        <br>
        <h1>Entrevista com Anderson José</h1>
        <br>

        <!-- <h2 class="">Autor de XXXXX<</h2> -->

        <!-- <p class="">< ? php echo fake()->paragraphs(1, true) ?></p> -->

    </div>

    <div class="entrevista-text-justificado ">
        <img src="{{ Storage::url('lancamentos/preVendaAnderson2026/bio.jpg') }}" style="max-width: 100%; display: block">
        <br>

        <h2>O que te levou a tornar-se um escritor, e o que te faz continuar escrevendo?</h2>

        <p><?php echo fake()->paragraphs(2, true) ?></p>

        <h2>Quais autores ou obras influenciaram seu estilo de escrita?</h2>

        <p><?php echo fake()->paragraphs(2, true) ?></p>

    </div>

    <div class="entrevista-frase-destaque">
        <p> <em>Uma frase em destaque e itálico. Uma frase em destaque e itálico. Uma frase em destaque e itálico.</em></p>
        <br>
    </div>

    <div class="entrevista-text-justificado ">
        <h2>Como você lida com o bloqueio criativo?</h2>

        <p><?php echo fake()->paragraphs(2, true) ?></p>

        <h2>Quais desafios você enfrentou durante sua jornada como escritor?</h2>

        <p><?php echo fake()->paragraphs(2, true) ?></p>
    </div>

    <div class="entrevista-frase-destaque">
        <p> <em>Uma frase em destaque e itálico. Uma frase em destaque e itálico. Uma frase em destaque e itálico.</em></p>
        <br>
    </div>

     <div class="entrevista-text-justificado ">
        <h2>Você está lançando um novo livro. Pode nos contar um pouco sobre o projeto?</h2>

        <p><?php echo fake()->paragraphs(2, true) ?></p>

        <img src="{{ Storage::url('lancamentos/preVendaAnderson2026/card02.jpg') }}" style="max-width: 100%; display: block">
        <br>

        <h2>Um romance costuma nascer de uma pergunta central. Qual foi a pergunta que deu origem a este livro?</h2>

        <p><?php echo fake()->paragraphs(2, true) ?></p>
    </div>

    <div class="entrevista-frase-destaque">
        <p> <em>Uma frase em destaque e itálico. Uma frase em destaque e itálico. Uma frase em destaque e itálico.</em></p>
        <br>
    </div>

     <div class="entrevista-text-justificado ">
        <h2>Você acredita que os personagens são espelhos de seus criadores? Qual personagem do livro você acredita que foi mais influenciado pela sua pessoa?</h2>

        <p><?php echo fake()->paragraphs(2, true) ?></p>

        <h2>Quais reações você espera que os leitores tenham ao ler seu livro?</h2>

        <p><?php echo fake()->paragraphs(2, true) ?></p>
    </div>

    <div class="entrevista-frase-destaque">
        <p> <em>Uma frase em destaque e itálico. Uma frase em destaque e itálico. Uma frase em destaque e itálico.</em></p>
        <br>
    </div>

     <div class="entrevista-text-justificado ">
        <h2>Como é seu processo de escrita e como foi para esse lançamento?</h2>

        <p><?php echo fake()->paragraphs(2, true) ?></p>

        <h2>Qual conselho você daria a um autor que mostra vontade, mas ainda está inseguro para escrever ficção?</h2>

        <p><?php echo fake()->paragraphs(2, true) ?></p>
    </div>


</section>

@endsection