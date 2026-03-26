<!-- as configurações de página estão layouts/app -->
@extends('layouts.app')

@section('title', 'Concursos')

<!-- corpo da página -->
@section('main')
    <!-- tudo aqui será renderizado com base no template -->
    
<div class="text-centralizado">
    <br>
    <h1>Prêmio Villa Diodati</h1>
    <h2>Prometeu Moderno</h2>
    <br>
    <p>
    <?php echo fake()->paragraphs(4, true); ?>
    <br><br>


    <div class="container">
        <button onclick="window.location.href='{{ Storage::url('arquivos/A-Internacional.pdf') }}'">
        Baixar Edital
        </button>  
    </div>

        
    </p>
</div>



    <!-- <div class="container-caixa">

        <textarea class="minha-caixa" id="" name="" rows="20" cols="50" placeholder="">Teste e mais testes.</textarea>
    </div> -->
    

@endsection