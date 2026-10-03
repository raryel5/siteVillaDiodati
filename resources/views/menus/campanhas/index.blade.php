<!-- as configurações de página estão layouts/app -->
@extends('layouts.app')

@section('title', 'Campanhas')
@section('description', 'Confira nossas campanhas ativas.')
<!-- @section('image', asset('storage/entrevistas/andersonJose/foto.jpeg')) -->

<!-- corpo da página -->
@section('main')
    <!-- tudo aqui será renderizado com base no template -->

<?php
    $botaoLeia = "Leia aqui"
?>

<section class="section-entrevista-corpo">

    <div class="entrevista-text-center">
        <br>
        <h1 style="font-family:'Aesthetic'; font-size: clamp(1rem, 5.5vw + 1rem, 6rem)">Campanhas do Villa</h1>
        <br>
    </div>

    <div class="flex-cards">

        <a href="{{ route('campanha', $id='aindahumanos') }}">
            <div class="card">
                <div class="card-title">
                    <h1>Coletânea Ainda Humanos</h1>
                </div>

                <div class="card-corpo">
                    <div>
                        <img src="{{ Storage::url('images/arte1x1.jpeg') }}">
                        <!-- <legend style="text-align: center">Dwight Schrute</legend> -->
                    </div>
                    <br>
                </div>
            </div>
        </a>

        <a href="{{ route('lancamentos') }}">
            <div class="card">
                <div class="card-title">
                    <h1>O Diabo São as Verdades que Não Te Contam</h1>
                </div>

                <div class="card-corpo">
                    <div>
                        <img src="{{ Storage::url('lancamentos/preVendaAnderson2026/arte1x1.jpg') }}">
                        <!-- <legend style="text-align: center">Dwight Schrute</legend> -->
                    </div>
                    <br>
                </div>
            </div>
        </a>
        
    </div>
</section>




@endsection