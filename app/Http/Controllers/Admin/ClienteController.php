<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Cliente;


class ClienteController extends Controller
{
    public function index()
    {
        $registros = Cliente::all();
        return view('admin.clientes', compact('registros'));
    }

    public function adicionar()
    {
        return view('admin.adicionarCliente');
    }

    public function salvar(Request $req)
    {
        $dados = $req->all();
        /* dd($dados); */

        /* if(isset($dados['ativo']))
        {
            $dados['ativo'] = 'sim';
        }else
        {
            $dados['ativo'] = 'nao';
        } */

        Cliente::Create($dados);

        return redirect()->route('admin.clientes');
    }

    public function editar($id)
    {
        $registro = Cliente::find($id);
        return view('admin.editarCliente', compact('registro'));
    }

    public function detalhes($id)
    {
        $registro = Cliente::find($id);
        return view('admin.detalhesCliente', compact('registro'));
    }

    public function atualizar(Request $req, $id)
    {
        $dados = $req->all();

        if(isset($dados['ativo']))
        {
            $dados['ativo'] = 'sim';
        }else
        {
            $dados['ativo'] = 'nao';
        }

        Cliente::find($id)->update($dados);

        return redirect()->route('admin.clientes');
    }

    public function deletar($id)
    {
        Cliente::find($id)->delete();

        return redirect()->route('admin.clientes');
    }
}
