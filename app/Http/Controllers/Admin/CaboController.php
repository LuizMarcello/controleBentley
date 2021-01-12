<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Cabo;

class CaboController extends Controller
{
    public function index()
    {
        $registros = Cabo::all();
        return view('admin.cabos', compact('registros'));
    }

    public function adicionar()
    {
        return view('admin.adicionarCabo');
    }

    public function salvar(Request $req)
    {
        $dados = $req->all();

       /*  if(isset($dados['ativo']))
        {
            $dados['ativo'] = 'sim';
        }else
        {
            $dados['ativo'] = 'nao';
        } */

        Cabo::Create($dados);

        return redirect()->route('admin.cabos');
    }

    public function editar($id)
    {
        $registro = Cabo::find($id);
        return view('admin.editarCabo', compact('registro'));
    }

    public function atualizar(Request $req, $id)
    {
        $dados = $req->all();

        /* if(isset($dados['ativo']))
        {
            $dados['ativo'] = 'sim';
        }else
        {
            $dados['ativo'] = 'nao';
        } */

        Cabo::find($id)->update($dados);

        return redirect()->route('admin.cabos');
    }

    public function deletar($id)
    {
        Cabo::find($id)->delete();

        return redirect()->route('admin.cabos');
    }
}
