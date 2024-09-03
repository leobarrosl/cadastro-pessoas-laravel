<?php

namespace App\Http\Controllers\WEB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pessoa as PessoaModel;

class Pessoa extends Controller
{
    public function salvar(Request $request)
    {
        {
            $request->validate(
                [
                "nome" => "required|min:3",
                ]
            );
    
            if (PessoaModel::cadastrar($request)) {
                return view("sucesso");
            } else {
                echo "Ops, falha!";
            }
        }
    }
}
