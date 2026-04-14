<!-- as configurações de página estão layouts/app -->
@extends('layouts.app')

@section('title', 'Início')

<!-- corpo da página -->
@section('main')
    <!-- tudo aqui será renderizado com base no template -->
<section class='section-corpo'>
    <div class='recuo'>
        <br>
        <h1 style="font-family: 'Aesthetic'; font-size: clamp(1rem, 12vw + 1rem, 6rem)">VILLA DIODATI</h1>
        <h1 style="font-size: clamp(1rem, 3.5vw + 1rem, 3.7rem); font-weight: lighter; letter-spacing: 9.3px">Coletivo de Autores</h1>
        
        <br>
        <div style="width: clamp(1rem, 80vw + 1rem, 55rem)">
            <div style="font-size: clamp(1rem, 0.8vw + 1rem, 1.5rem); line-height: clamp(1rem, 1.3vw + 1rem, 2rem); text-align: justify">
                <p>Há algo de especial no momento em que escritores se reconhecem uns nos outros. Para além das influências e referências literárias compartilhadas, mas também na experiência comum de produzir fora dos grandes circuitos editoriais, de construir um público leitor sem os recursos das grandes estruturas do mercado. Foi essa identificação que aproximou os autores independentes, que hoje formam este Coletivo.</p>
                <p>As trocas foram se aprofundando e o grupo foi adquirindo uma coesão que ia muito além da proposta original. Chegou o momento de dar um nome a tudo aquilo. A conversa sobre como chamá-lo percorreu obras, personagens e trajetórias de escritores que os inspiraram, até pousar sobre um episódio singular da história literária: a reunião que aconteceu em 1816, às margens do Lago Léman, na Suíça, quando um pequeno grupo de amigos passou dias trocando histórias e produziu obras que definiram gerações. Era exatamente isso que este Coletivo queria ser: um lugar onde a literatura acontece no encontro.</p>
                <p>Assim surgiu o Villa Diodati - Coletivo de Autores.</p>
        </div>      
    </div>
    
    
</section>





    <!-- <div class="container-caixa">

        <textarea class="minha-caixa" id="" name="" rows="20" cols="50" placeholder="">Teste e mais testes.</textarea>
    </div> -->
    

@endsection