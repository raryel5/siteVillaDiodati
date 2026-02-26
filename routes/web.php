<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuemsomosController;
use App\Http\Controllers\CatalogoController;
use App\Http\Controllers\NovidadesController;
use App\Http\Controllers\ConcursosController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\PubliqueController;
use App\Http\Controllers\DiagramacaoController;

// Route::get('/', function () {
//     return view('home');
// });

Route::prefix('/home')->group(function(){
    Route::get('/', [HomeController::class, 'index'])->name('home');
});

Route::prefix('/quemsomos')->group(function(){
    Route::get('/', [QuemsomosController::class, 'index'])->name('quemsomos');
});

Route::prefix('/catalogo')->group(function(){
    Route::get('/', [CatalogoController::class, 'index'])->name('catalogo');
});

Route::prefix('/novidades')->group(function(){
    Route::get('/', [NovidadesController::class, 'index'])->name('novidades');
});

Route::prefix('/concursos')->group(function(){
    Route::get('/', [ConcursosController::class, 'index'])->name('concursos');
});

Route::prefix('/produtos')->group(function(){
    Route::get('/', [ProdutosController::class, 'index'])->name('produtos');
});

Route::prefix('/publique')->group(function(){
    Route::get('/', [PubliqueController::class, 'index'])->name('publique');
});

Route::prefix('/diagramacao')->group(function(){
    Route::get('/', [DiagramacaoController::class, 'index'])->name('diagramacao');
});

Route::fallback(function(){
    return "Erro!";
});

// Route::view('/index', 'home');

