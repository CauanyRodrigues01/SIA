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

Use App\Http\Controllers\ImoveisController;

Route::get('/', [ImoveisController::class, 'index']);

Route::get('/QuemSomos', [ImoveisController::class, 'quemSomos']);

Route::get('/Contato', [ImoveisController::class, 'contato']);

Route::get('/Imoveis/Criar', [ImoveisController::class, 'criarImovel'])->middleware('auth');
Route::get('/Imoveis/{id}', [ImoveisController::class, 'showImovel']);
Route::get('/Imoveis', [ImoveisController::class, 'imoveis']);
Route::get('/Imoveis/Edit/{id}', [ImoveisController::class, 'editImovel'])->middleware('auth');
Route::put('/Imoveis/Update/{id}', [ImoveisController::class, 'updateImovel'])->middleware('auth');
Route::post('/Imoveis', [ImoveisController::class, 'salvarImovel']);
Route::delete('/Imoveis/{id}', [ImoveisController::class, 'destroyImovel'])->middleware('auth');

Route::get('/Corretores', [ImoveisController::class, 'corretores']);
Route::get('/Corretores/Criar', [ImoveisController::class, 'criarCorretor']);

Route::get('/Imoveis/Criar/Apartamento', [ImoveisController::class, 'criarImovelApartamento']);
Route::post('/Imoveis/Apartamento', [ImoveisController::class, 'salvarApartamento']);

Route::get('/Imoveis/Criar/Casa', [ImoveisController::class, 'criarImovelCasa']);
Route::post('/Imoveis/Casa', [ImoveisController::class, 'salvarCasa']);

Route::get('/Imoveis/Criar/Terreno', [ImoveisController::class, 'criarImovelTerreno']);
Route::post('/Imoveis/Terreno', [ImoveisController::class, 'salvarTerreno']);

Route::get('/Imoveis/Criar/Fazenda', [ImoveisController::class, 'criarImovelFazenda']);
Route::post('/Imoveis/Fazenda', [ImoveisController::class, 'salvarFazenda']);

Route::get('/dashboard', [ImoveisController::class, 'dashboard'])->middleware('auth');
