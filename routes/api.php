<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('/pessoa/{limit}', 'App\Http\Controllers\Pessoa@listar');
Route::post('/pessoa', 'App\Http\Controllers\Pessoa@cadastrar');
