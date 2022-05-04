<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\funcoes;


Route::get('/', [funcoes::class,"listar"]);
Route::get('/cadastrarusuario', [funcoes::class,"cadastrarusuario"]);
Route::get('/cadastrarempresa', [funcoes::class,"cadastrarempresa"]);
Route::post('/enviarusuarios', [funcoes::class,"enviarusuarios"]);
Route::post('/enviarempresas', [funcoes::class,"enviarempresas"]);
Route::get('/listar', [funcoes::class,"listar"]);
Route::get('/listarempresa', [funcoes::class,"listarempresa"]);
Route::get('/editar/{id}', [funcoes::class,"editar"]);
Route::put('/update/{id}', [funcoes::class,"update"]);
Route::get('/editarempresa/{id}', [funcoes::class,"editarempresa"]);
Route::get('/sobre/{id}', [funcoes::class,"sobre"]);
Route::put('/updateempresa/{id}', [funcoes::class,"updateempresa"]);
Route::delete('/deletar/{id}', [funcoes::class,"destroy"]);
Route::delete('/deletarempresa/{id}', [funcoes::class,"destroyempresa"]);



