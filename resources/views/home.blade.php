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
            <p style="font-size: clamp(1rem, 0.8vw + 1rem, 1.5rem); line-height: 40px; text-align: justify">
                <?php echo fake()->paragraphs(3, true); ?>
            </p> 
        </div>      
    </div>
    
    
</section>





    <!-- <div class="container-caixa">

        <textarea class="minha-caixa" id="" name="" rows="20" cols="50" placeholder="">Teste e mais testes.</textarea>
    </div> -->
    

@endsection