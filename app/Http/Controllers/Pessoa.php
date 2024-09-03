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

    public function cadastrar(Request $request)
    {
        $request->validate(
            [
            "nome" => "required|min:3",
            ]
        );

        if (PessoaModel::cadastrar($request)) {
            echo "Cadastrado com sucesso!";
        } else {
            echo "Ops, falha!";
        }
    }
}
