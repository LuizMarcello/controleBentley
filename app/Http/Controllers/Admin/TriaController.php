<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Tria;

class TriaController extends Controller
{
    public function index()
    {
        $registros = Tria::all();
        return view('admin.trias', compact('registros'));
    }

    public function adicionar()
    {
        return view('admin.adicionarTria');
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

        Tria::Create($dados);

        return redirect()->route('admin.trias');
    }

    public function detalhes($id)
    {
        $registro = Tria::find($id);
        return view('admin.detalhesTria', compact('registro'));
    }

    public function editar($id)
    {
        $registro = Tria::find($id);
        return view('admin.editarTria', compact('registro'));
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

        Tria::find($id)->update($dados);

        return redirect()->route('admin.trias');
    }

    public function deletar($id)
    {
        Tria::find($id)->delete();

        return redirect()->route('admin.trias');
    }
}
