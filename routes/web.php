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
use App\Http\Controllers\LivrosController;
use App\Http\Controllers\ServicosController;
use App\Http\Controllers\LancamentosController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

// Route::get('/', function () {
//     return view('home');
// });

Route::prefix('/')->group(function(){
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

Route::prefix('/servicos')->group(function(){
    Route::get('/', [ServicosController::class, 'index'])->name('servicos');
});

Route::prefix('/lancamentos')->group(function(){
    Route::get('/', [LancamentosController::class, 'index'])->name('lancamentos');
});

Route::prefix('/lancamentos/sucessos')->group(function(){
    Route::get('/', [LancamentosController::class, 'sucesso'])->name('sucesso');
});

Route::prefix('/lancamentos/failures')->group(function(){
    Route::get('/', [LancamentosController::class, 'failure'])->name('failure');
});

Route::prefix('/lancamentos/pendings')->group(function(){
    Route::get('/', [LancamentosController::class, 'pending'])->name('pending');
});


Route::fallback(function(){
    return "Erro!";
});

# ROTAS PARA LIVROS

Route::prefix('/lista')->group(function(){
Route::get('/', [LivrosController::class, 'index'])->name('lista');
});

Route::prefix('/livros/{titulo}')->group(function(){
Route::get('/', [LivrosController::class, 'exibir'])->name('livros');
});

Route::prefix('/formPVDPM')->group(function(){
    Route::get('/', [ConcursosController::class, 'formulario'])->name('formPVDPM');
});