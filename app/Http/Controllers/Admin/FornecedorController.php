<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Fornecedor;

class FornecedorController extends Controller
{
    public function index()
    {
        $registros = Fornecedor::all();
        return view('admin.fornecedores', compact('registros'));
    }

    public function adicionar()
    {
        return view('admin.adicionarFornecedor');
    }

    public function salvar(Request $req)
    {
        $dados = $req->all();

        /* if(isset($dados['ativo']))
        {
            $dados['ativo'] = 'sim';
        }else
        {
            $dados['ativo'] = 'nao';
        } */

        Fornecedor::Create($dados);

        return redirect()->route('admin.fornecedores');
    }
}
