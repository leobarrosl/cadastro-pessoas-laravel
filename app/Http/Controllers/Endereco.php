<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Endereco as EnderecoModel;

class Endereco extends Controller
{
    public static function buscar(string $cep, int $inserido)
    {
        $cep = preg_replace("/[^0-9]/in", "", $cep);

        $endereco = file_get_contents("https://viacep.com.br/ws/$cep/json");

        $endereco = (array) json_decode($endereco, true);

        $deuCerto = EnderecoModel::cadastrar($inserido, $endereco);

        return $deuCerto;
    }
}
