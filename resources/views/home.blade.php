<!-- as configurações de página estão layouts/app -->
@extends('layouts.app')

@section('title', 'Início')

<!-- corpo da página -->
@section('main')
    <!-- tudo aqui será renderizado com base no template -->
<section class='section-corpo'>
    <div class='recuo'>
        <br>
        <h1 style="font-family: 'Aesthetic'; font-size: 85px">VILLA DIODATI</h1>

        <h1 style="font-size: 50px; font-weight: lighter; letter-spacing: 9.3px">Coletivo de Autores</h1>
        
        <br>
        <!-- <div class="recuo-parag"> -->
            <p style="width: 100%; font-size: 20px; line-height: 50px; align-items: justify">
            <?php echo fake()->paragraphs(3, true); ?>
        </p>
        <!-- </div> -->
        <!-- <p style="width: 100%; font-size: 20px; line-height: 50px; align-items: justify"> -->
        <!-- <?php echo fake()->paragraphs(3, true); ?> -->
    <!-- </p> -->
        
    </div>

    
</section>





    <!-- <div class="container-caixa">

        <textarea class="minha-caixa" id="" name="" rows="20" cols="50" placeholder="">Teste e mais testes.</textarea>
    </div> -->
    

@endsection