<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OperacoesController;
use App\Http\Controllers\nomeController;
use App\Http\Controllers\dadosController;
use App\Http\Controllers\tabelaController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//atividade1_a
Route::get('/nome/{nome}/{sobrenome?}', [nomeController::class, 'Mostrar']);

//atividade1_b
Route::get('/operacoes/soma/{valor1}/{valor2}', [OperacoesController::class, 'soma']);
Route::get('/operacoes/subtracao/{valor1}/{valor2}', [OperacoesController::class, 'subtracao']);
Route::get('/operacoes/multiplicacao/{valor1}/{valor2}', [OperacoesController::class, 'multiplicacao']);
Route::get('/operacoes/divisao/{valor1}/{valor2}', [OperacoesController::class, 'divisao']);

//atividade1_c
Route::get('/dados/{nome}/{sobrenome}/{idade}/{rm}/{genero}/{endereco}', [dadosController::class, 'mostrarDados']);

//atividade2

Route::get('/produtos', [tabelaController::class, 'buscarPorCategoria']);