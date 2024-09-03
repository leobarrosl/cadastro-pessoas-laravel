<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cadastro_pessoas', function () {
    return view('cadastro');
});
Route::post('/cadastro_pessoas', "App\Http\Controllers\WEB\Pessoa@salvar")->name("salvar");
