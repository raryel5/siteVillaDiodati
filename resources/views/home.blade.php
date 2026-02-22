<!-- as configurações de página estão layouts/app -->
@extends('layouts.app')

@section('title', 'Início')

<!-- corpo da página -->
@section('main')
    <!-- tudo aqui será renderizado com base no template -->

    <div class="recuo">
        <br>
        <h1 style="font-family: 'Aesthetic'; font-size: 85px">VILLA DIODATI</h1>

        <h2 style="font-size: 70px; font-weight: lighter">Coletivo de Autores</h2>
        <br>

        <p>
            <?php echo fake()->paragraphs(3, true); ?>
        </p>
    </div>



    <!-- <div class="container-caixa">

        <textarea class="minha-caixa" id="" name="" rows="20" cols="50" placeholder="">Teste e mais testes.</textarea>
    </div> -->
    

@endsection