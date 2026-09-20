<!-- as configurações de página estão layouts/app -->
@extends('layouts.app')

@section('title', 'Villa Entrevista')
@section('description', 'Confira entrevistas com diversos autores.')
@section('image', asset('storage/entrevistas/andersonJose/foto.jpeg'))

<!-- corpo da página -->
@section('main')
    <!-- tudo aqui será renderizado com base no template -->

<?php
    $botaoLeia = "Leia aqui"
?>

<section class="section-entrevista-corpo">

    <div class="entrevista-text-center">
        <br>
        <h1 style="font-family:'Aesthetic'; font-size: clamp(1rem, 5.5vw + 1rem, 6rem)">Villa Entrevista</h1>
        <br>
    </div>

    <div class="flex-cards">

        <a href="{{ route('autor', $id=1) }}">
            <div class="card">
                <div class="card-title">
                    <h1>Entrevista com Anderson José</h1>
                </div>

                <div class="card-corpo">
                    <div>
                        <img src="{{ Storage::url('entrevistas/andersonJose/foto.jpeg') }}" style="max-width: 100%; display: block">
                        <!-- <legend style="text-align: center">Dwight Schrute</legend> -->
                    </div>
                    <br>
                </div>
            </div>
        </a>

        <a href="{{ route('autor', $id=1) }}">
            <div class="card">
                <div class="card-title">
                    <h1>Entrevista com Anderson José</h1>
                </div>

                <div class="card-corpo">
                    <div>
                        <img src="{{ Storage::url('entrevistas/andersonJose/foto.jpeg') }}" style="max-width: 100%; display: block">
                        <!-- <legend style="text-align: center">Dwight Schrute</legend> -->
                    </div>
                    <br>
                </div>
            </div>
        </a>

        <a href="{{ route('autor', $id=1) }}">
            <div class="card">
                <div class="card-title">
                    <h1>Entrevista com Anderson José</h1>
                </div>

                <div class="card-corpo">
                    <div>
                        <img src="{{ Storage::url('entrevistas/andersonJose/foto.jpeg') }}" style="max-width: 100%; display: block">
                        <!-- <legend style="text-align: center">Dwight Schrute</legend> -->
                    </div>
                    <br>
                </div>
            </div>
        </a>

        <a href="{{ route('autor', $id=1) }}">
            <div class="card">
                <div class="card-title">
                    <h1>Entrevista com Anderson José</h1>
                </div>

                <div class="card-corpo">
                    <div>
                        <img src="{{ Storage::url('entrevistas/andersonJose/foto.jpeg') }}" style="max-width: 100%; display: block">
                        <!-- <legend style="text-align: center">Dwight Schrute</legend> -->
                    </div>
                    <br>
                </div>
            </div>
        </a>
        
    </div>
</section>




@endsection