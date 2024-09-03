<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Endereco extends Controller
{
    public static function buscar(string $cep)
    {
        $cep = preg_replace("/[^0-9]/in", "", $cep);

        $get = file_get_contents("https://viacep.com.br/ws/$cep/json");

        return (array) json_decode($get, true);
    }
}
