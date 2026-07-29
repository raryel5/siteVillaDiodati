<!-- as configurações de página estão layouts/app -->
@extends('layouts.app')  
@section('title', 'Clientes')  

<!-- corpo da página -->
@section('main')
<!-- tudo aqui será renderizado com base no template -->

  

<div class="text-centralizado">

<h1 class="">Listagem de Clientes</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Valor R$</th>
      <th scope="col">Status de pagamento</th>
      <th scope="col">Recebedor</th>
    </tr>
  </thead>

  <tbody>
    @foreach($clientes as $cliente)
    <tr>
      <td>{{ $cliente->id }}</td>
      <td>{{ $cliente->name }}</td>
      <td>{{ $cliente->value }}</td>
      <td>{{ $cliente->payment_status }}</td>
      <td>{{ $cliente->nameReceiver }}</td>
    </tr>

    @endforeach
  </tbody>

</table>

</div>

@endsection