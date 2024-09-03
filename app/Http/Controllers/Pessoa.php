<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoa as PessoaModel;

class Pessoa extends Controller
{
    public function listar(int $limite = 10)
    {
        return PessoaModel::listar($limite);
    }

    public function porId($id)
    {
        $pessoa = null;

        foreach ($this->listar() as $_pessoa) {
            if ($_pessoa["id"] == $id) {
                $pessoa = $_pessoa;
                break;
            }
        }

        return $pessoa ? response()->json($pessoa) : abort(404);
    }

    public function cadastrar(Request $request)
    {
        $request->validate(
            [
            "nome" => "required|min:3",
            ]
        );
        
        $cadastrado = PessoaModel::cadastrar($request);

        if ($cadastrado) {
            echo "Cadastrado com sucesso!";
        } else {
            echo "Ops, falha!";
        }
    }
}
