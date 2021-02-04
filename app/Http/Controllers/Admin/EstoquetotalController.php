<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Estoquetotal;

class estoquetotalController extends Controller
{
    public function index()
    {
        return view('admin.home');
    }

    public function estoquetotal()
    {
        /* $client = \App\estoquetotal::find($id); */
        $registros = \App\Estoquetotal::all();
        return view('admin.estoqueTotal', compact('registros'));
    }

    public function adicionar()
    {
        return view('admin.adicionarComponente');
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

        Estoquetotal::Create($dados);

        return redirect()->route('admin.estoquetotal');
    }

    public function editar($id)
    {
        $registro = Estoquetotal::find($id);
        return view('admin.editarComponente', compact('registro'));
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

        Estoquetotal::find($id)->update($dados);

        return redirect()->route('admin.estoquetotal');
    }

    public function deletar($id)
    {
        Estoquetotal::find($id)->delete();

        return redirect()->route('admin.estoquetotal');
    }
}
