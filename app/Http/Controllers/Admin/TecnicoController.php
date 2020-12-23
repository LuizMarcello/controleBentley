<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Tecnico;

class TecnicoController extends Controller
{
    public function index()
    {
        $registros = Tecnico::all();
        return view('admin.tecnicos', compact('registros'));
    }

    public function adicionar()
    {
        return view('admin.adicionarTecnico');
    }

    public function salvar(Request $req)
    {
        $dados = $req->all();

        Tecnico::Create($dados);

        return redirect()->route('admin.tecnicos');
    }

    public function editar($id)
    {
        $registro = Tecnico::find($id);
        return view('admin.editarTecnico', compact('registro'));
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

        Tecnico::find($id)->update($dados);

        return redirect()->route('admin.tecnicos');
    }

    public function deletar($id)
    {
        Tecnico::find($id)->delete();

        return redirect()->route('admin.tecnicos');
    }
}


