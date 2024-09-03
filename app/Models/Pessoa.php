<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Pessoa extends Model
{
    use HasFactory;

    protected $connection = "mysql";

    protected $table = "pessoa";

    public static function listar(int $limite)
    {
        $sql = self::select([
            "id",
            "nome",
            "data_nascimento",
            "salario",
            "hora_cadastro",
        ])->limit($limite);

        return $sql->get();
    }

    public static function cadastrar(Request $request)
    {
        $inserido = self::insertGetId([
            "nome" => $request->nome,
            "idade" => $request->idade,
            "data_nascimento" => $request->data_nascimento,
            "salario" => $request->salario,
            "hora_cadastro" => new Carbon()
        ]);

        Endereco::cadastrar($request, $inserido);

        return $inserido;
    }
}
