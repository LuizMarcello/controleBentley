<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Designacao;

class DesignacaoController extends Controller
{
    public function index()
    {
        $registros = Designacao::all();
        return view('admin.designacao', compact('registros'));
    }

    public function adicionar()
    {
        return view('admin.adicionarDesignacao');
    }

    public function salvar(Request $req)
    {
        $dados = $req->all();

        Designacao::Create($dados);

        return redirect()->route('admin.designacao');
    }

    public function editar($id)
    {
        $registro = Designacao::find($id);
        return view('admin.editarDesignacao', compact('registro'));
    }

    public function atualizar(Request $req, $id)
    {
        $dados = $req->all();

        Designacao::find($id)->update($dados);

        return redirect()->route('admin.designacao');
    }

    public function deletar($id)
    {
        Designacao::find($id)->delete();

        return redirect()->route('admin.designacao');
    }
}
        


