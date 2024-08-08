<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\UserController;
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

