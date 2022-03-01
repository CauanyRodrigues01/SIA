<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Use App\Http\Controllers\ImovelController;

Route::get('/', [ImovelController::class, 'index']);

Route::get('/QuemSomos', [ImovelController::class, 'quemSomos']);

Route::get('/Corretores', [ImovelController::class, 'corretores']);

Route::get('/Contato', [ImovelController::class, 'contato']);

Route::get('/Corretores/Criar', [ImovelController::class, 'criarCorretor']);

Route::get('/Imoveis/Criar', [ImovelController::class, 'criarImovel']);
