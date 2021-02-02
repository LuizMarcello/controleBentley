<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Plano;

class PlanoController extends Controller
{
    public function index()
    {
        $registros = Plano::all();
        return view('admin.planos', compact('registros'));
    }

    public function adicionar()
    {
        return view('admin.adicionarPlano');
    }

    public function salvar(Request $req)
    {
        $dados = $req->all();


        Plano::Create($dados);

        return redirect()->route('admin.planos');
    }

    public function detalhes($id)
    {
        $registro = Plano::find($id);
        return view('admin.detalhesPlano', compact('registro'));
    }

    public function editar($id)
    {
        $registro = Plano::find($id);
        return view('admin.editarPlano', compact('registro'));
    }

    public function atualizar(Request $req, $id)
    {
        $dados = $req->all();

       /*  if(isset($dados['ativo']))
        {
            $dados['ativo'] = 'sim';
        }else
        {
            $dados['ativo'] = 'nao';
        } */

        Plano::find($id)->update($dados);

        return redirect()->route('admin.planos');
    }
}
