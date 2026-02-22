<!-- as configurações de página estão layouts/app -->
@extends('layouts.app')

@section('title', 'Quem somos')

<!-- corpo da página -->
@section('main')
    <!-- tudo aqui será renderizado com base no template -->
    
    <div class="recuo">
        <br>
        <h1 style="font-family: 'Aesthetic'; font-size: 85px">VILLA DIODATI</h1>
        <h1 style="font-size: 50px; font-weight: lighter; letter-spacing: 9.3px">Coletivo de Autores</h1>
        <br>
    </div>
    <div class="textWidePage">        
        <p>
            <?php echo fake()->paragraphs(4, true); ?>
        </p>
    </div>



    <!-- <div class="container-caixa">

        <textarea class="minha-caixa" id="" name="" rows="20" cols="50" placeholder="">Teste e mais testes.</textarea>
    </div> -->
    

@endsection