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

        <h2 class="">Autor de XXXXX<</h2>

        <!-- <p class="">< ? php echo fake()->paragraphs(1, true) ?></p> -->

    </div>

    <div class="entrevista-text-justificado ">

        <p>Aqui vai uma bio do autor. Aqui vai uma bio do autor. Aqui vai uma bio do autor. Aqui vai uma bio do autor. Aqui vai uma bio do autor. Aqui vai uma bio do autor. Aqui vai uma bio do autor. Aqui vai uma bio do autor. Aqui vai uma bio do autor. Aqui vai uma bio do autor. Aqui vai uma bio do autor. Aqui vai uma bio do autor.</p>

        <h1>Pergunta 1</h1>

        <p><?php echo fake()->paragraphs(2, true) ?></p>

        <h1>Pergunta 2</h1>

        <p><?php echo fake()->paragraphs(2, true) ?></p>
    </div>

    <div class="entrevista-frase-destaque">
        <p> <i>Uma frase em destaque e itálico. Uma frase em destaque e itálico. Uma frase em destaque e itálico.</i></p>
    </div>

    <div class="entrevista-text-justificado ">
        <h1 class="">Pergunta 3</h1>

        <p class=""><?php echo fake()->paragraphs(2, true) ?></p>

        <h1 class="">Pergunta 4</h1>

        <p class=""><?php echo fake()->paragraphs(2, true) ?></p>
    </div>

    <div class="entrevista-frase-destaque">
        <p> <i>Uma frase em destaque e itálico. Uma frase em destaque e itálico. Uma frase em destaque e itálico.</i></p>
    </div>


</section>

@endsection