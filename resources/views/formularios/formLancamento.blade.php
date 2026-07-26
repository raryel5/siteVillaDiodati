<!-- as configurações de página estão layouts/app -->
@extends('layouts.app')

@section('title', 'Inscrição')

<!-- corpo da página -->
@section('main')
<!-- tudo aqui será renderizado com base no template -->

<div class="text-centralizado">
    <br>
    <h1>Cadastro inicial</h1>
    
    <br>
    <p>Prencha seus dados para cadastro e envio do material.</p>
    <br>

    <form action="{{ route('formLancamento') }}" method="POST">
        @csrf
        <!-- Dados do Cliente -->
        <input type="text" name="name" placeholder="Nome Completo" required>
        <input type="email" name="email" placeholder="E-mail" required>
        <input type="text" name="cpf" placeholder="CPF (Somente números)" required>

        <!-- Detalhes do Pagamento -->
        <select name="payment_method_id" required>
            <option value="pix">Pix</option>
            <option value="bolbradesco">Boleto Bancário</option>
        </select>

        <button type="submit">Pagar Agora</button>
    </form>

</div>



@endsection