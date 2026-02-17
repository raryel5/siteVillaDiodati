<!-- as configurações de página estão layouts/app -->
@extends('layouts.app')

@section('title', 'Publique')

<!-- corpo da página -->
@section('main')
    <!-- tudo aqui será renderizado com base no template -->
    
    <div class="recuo">
        <h1>Publique conosco</h1>
        <h2>Um subtítulo</h2>
        <br>
        <p>
            <?php echo fake()->paragraphs(3, true); ?>
        </p>
    </div>



    <!-- <div class="container-caixa">

        <textarea class="minha-caixa" id="" name="" rows="20" cols="50" placeholder="">Teste e mais testes.</textarea>
    </div> -->
    

@endsection