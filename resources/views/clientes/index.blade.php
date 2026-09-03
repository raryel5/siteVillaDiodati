<!-- as configurações de página estão layouts/app -->
@extends('layouts.app')  
@section('title', 'Apoiadores')  

<!-- corpo da página -->
@section('main')
<!-- tudo aqui será renderizado com base no template -->

  

<div class="text-centralizado">

<h2 class="">Apoiadores</h2>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Sobrenome</th>
      <th scope="col">Valor R$</th>
      <th scope="col">E-mail</th>
      <th scope="col">Status de pagamento</th>
      {{-- <th scope="col">Recebedor</th> --}}
    </tr>
  </thead>

  <tbody>
    @foreach($clientes as $cliente)
    <tr>
      <td>{{ $cliente->id }}</td>
      <td>{{ $cliente->firstname }}</td>
      <td>{{ $cliente->surname }}</td>
      <td>{{ $cliente->valor }}</td>
      <td>{{ $cliente->email }}</td>
      <td>{{ $cliente->payment_status }}</td>
      {{-- <td>{{ $cliente->nameReceiver }}</td> --}}
    </tr>

    @endforeach
  </tbody>

</table>

</div>

@endsection