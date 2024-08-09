<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ManutencaoController;
use App\Http\Controllers\OrcamentoController;
use App\Http\Controllers\PlacaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('placas', [PlacaController::class, 'index']);
Route::get('placas/{id}', [PlacaController::class, 'show']);
Route::post('placas', [PlacaController::class, 'store']);
Route::put('placas/{id}', [PlacaController::class, 'update']);
Route::delete('placas/{id}', [PlacaController::class, 'destroy']);

Route::get('orcamentos', [OrcamentoController::class, 'index']);
Route::get('orcamentos/{id}', [OrcamentoController::class, 'show']);
Route::post('orcamentos', [OrcamentoController::class, 'store']);
Route::put('orcamentos/{id}', [OrcamentoController::class, 'update']);
Route::delete('orcamentos/{id}', [OrcamentoController::class, 'destroy']);

Route::get('/manutencao', [ManutencaoController::class, 'index']);
Route::get('/manutencao/{id}', [ManutencaoController::class, 'show']);
Route::post('/manutencao', [ManutencaoController::class, 'store']);
Route::put('/manutencao/{id}', [ManutencaoController::class, 'update']);
Route::delete('/manutencao/{id}', [ManutencaoController::class, 'destroy']);

Route::get('/fornecedores', [FornecedorController::class, 'index']);
Route::get('/fornecedores/{id}', [FornecedorController::class, 'show']);
Route::post('/fornecedores', [FornecedorController::class, 'store']);
Route::put('/fornecedores/{id}', [FornecedorController::class, 'update']);
Route::delete('/fornecedores/{id}', [FornecedorController::class, 'destroy']);

Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{id}', [UserController::class, 'show']);
Route::post('/users', [UserController::class, 'store']);
Route::put('/users/{id}', [UserController::class, 'update']);
Route::delete('/users/{id}', [UserController::class, 'destroy']);

