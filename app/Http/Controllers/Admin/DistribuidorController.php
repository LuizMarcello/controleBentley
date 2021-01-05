<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Distribuidor;


class DistribuidorController extends Controller
{
    public function index()
    {
        $registros = Distribuidor::all();
        return view('admin.distribuidores', compact('registros'));
    }

    public function adicionar()
    {
        return view('admin.adicionarDistribuidor');
    }

    public function salvar(Request $req)
    {
        $dados = $req->all();

        Distribuidor::Create($dados);

        return redirect()->route('admin.distribuidores');
    }

    public function editar($id)
    {
        $registro = Distribuidor::find($id);
        return view('admin.editarDistribuidor', compact('registro'));
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

        Distribuidor::find($id)->update($dados);

        return redirect()->route('admin.distribuidores');
    }

    public function deletar($id)
    {
        Distribuidor::find($id)->delete();

        return redirect()->route('admin.distribuidores');
    }
}



