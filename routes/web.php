<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuemsomosController;
use App\Http\Controllers\NovidadesController;
use App\Http\Controllers\ConcursosController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\PubliqueController;
use App\Http\Controllers\DiagramacaoController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);

Route::get('/quemsomos', [QuemsomosController::class, 'index']);

Route::get('/novidades', [NovidadesController::class, 'index']);

Route::get('/concursos', [ConcursosController::class, 'index']);

Route::get('/produtos', [ProdutosController::class, 'index']);

Route::get('/publique', [PubliqueController::class, 'index']);

Route::get('/servicos/diagramacao', [DiagramacaoController::class, 'index']);



// Route::view('/index', 'home');

