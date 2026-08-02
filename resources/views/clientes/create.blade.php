<!-- as configurações de página estão layouts/app -->

@extends('layouts.app')  

@section('title', 'cadastro')  

<!-- corpo da página -->
@section('main')
<!-- tudo aqui será renderizado com base no template -->

<!-- variaveis PHP -->
<?php
$obrigatorio = " *" 
?>

  

<div class="text-centralizado">
    <br>
    <h1>Cadastro inicial</h1>
    <br>
    <p>Prencha seus dados para cadastro e envio do material.</p>
    <br>

<form action="{{ route('clientes-store') }}" method="POST">
    @csrf

    <!-- Dados do Cliente -->
    <div class="form-group">

        <div class="form-group">
            <label for="name" class="">Nome:</label><br>
            <input type="text" class="form-group" name="name" placeholder="Nome completo" required><b> <?php echo $obrigatorio ?> </b>
        </div>

        <div class="form-group">
            <label for="email" class="">E-mail:</label><br>
            <input type="email" class="form-group" name="email" placeholder="Endereço de e-mail" required><b> <?php echo $obrigatorio ?> </b>
        </div>

        <div class="form-group">
            <label for="email" class="">Confirme o E-mail:</label><br>
            <input type="email" class="form-group" name="email_confirmation" placeholder="Confirme o e-mail" required><b> <?php echo $obrigatorio ?> </b>
        </div>

        <div class="form-group">
            <label for="cpf" class="">CPF:</label><br>
            <input type="int" class="form-group" name="cpf" placeholder="CPF (apenas números)" required><b> <?php echo $obrigatorio ?> </b>
        </div>

        <div class="form-group">
            <label for="fone" class="">Celular:</label><br>
            <input type="int" class="form-group" name="fone" placeholder="DDD + celular (apenas números)" required><b> <?php echo $obrigatorio ?> </b>
        </div>

        <br>

    <p>Endereço para envio do material</p>

        <div class="form-group">
            <label for="nameReceiver" class="">Nome do recebedor:</label><br>
            <input type="text" class="form-group" name="nameReceiver" placeholder="Deixar em branco se for o mesmo nome">
        </div>

        <div class="form-group">
            <label for="adress" class="">Rua/Av:</label><br>
            <input type="text" class="form-group" name="adress" placeholder="Nome da rua ou avenida" required><b> <?php echo $obrigatorio ?> </b>
        </div>

        <div class="form-group">
            <label for="number" class="">Número:</label><br>
            <input type="int" class="form-group" name="number" placeholder="Número ou (S/N)" required><b> <?php echo $obrigatorio ?> </b>
        </div>

        <div class="form-group">
            <label for="complement" class="">Complemento:</label><br>
            <input type="text" class="form-group" name="complement" placeholder="Complemento (se houver)">
        </div>

        <div class="form-group">
            <label for="city" class="">Cidade:</label><br>
            <input type="text" class="form-group" name="city" placeholder="Cidade" required><b> <?php echo $obrigatorio ?> </b>
        </div>

        <div class="form-group">
            <label for="state" class="">Estado:</label><br>
            <input type="text" class="form-group" name="state" placeholder="Estado (apenas sigla)" required><b> <?php echo $obrigatorio ?> </b>
        </div>

        <div class="form-group">
            <label for="cep" class="">CEP:</label><br>
            <input type="int" class="form-group" name="cep" placeholder="CEP (apenas números)" required><b> <?php echo $obrigatorio ?> </b>
        </div>

        <p style="font-size: clamp(1rem, 0.1vw + 1rem, 6rem)"> * Itens obrigatórios</p>

        <br>   
        <input type="hidden" name="valor" value="5.00">
        <input type="hidden" name="product" value="Livro do Anderson">
        {{-- <input type="hidden" name="timestamp_envio" value="{{ now()->format('Uv') }}"> --}}
        <input type="hidden" name="timestamp_envio" value="{{ $timestamp }}">

        <br>

        <!-- < ?php
        if(isset($_POST['product'])){
                $title = $_POST['product'];
            }
        ?> -->

        <button type="submit"> Cadastrar </button>

    </div>
  

@error('email')
    <span style="color: red">{{ $message }}</span>
@enderror

</form>  

</div>
  

@endsection