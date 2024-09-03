<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use \App\Http\Controllers\Endereco as EnderecoController;

class Endereco extends Model
{
    use HasFactory;

    protected $connection = "mysql";

    protected $table = "endereco";

    public static function cadastrar(int $id, array $endereco)
    {
        return self::insert([
            "rua" => $endereco['logradouro'],
            "bairro" => $endereco['bairro'],
            "cidade" => $endereco['localidade'],
            "estado" => $endereco['uf'],
            "id_pessoa" => $id
        ]);
    }
}
