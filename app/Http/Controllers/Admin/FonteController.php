<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Fonte;

class FonteController extends Controller
{
    public function index()
    {
        $registros = Fonte::all();
        return view('admin.fontes', compact('registros'));
    }

    public function adicionar()
    {
        return view('admin.adicionarFonte');
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

        Fonte::Create($dados);

        return redirect()->route('admin.fontes');
    }

    public function editar($id)
    {
        $registro = Fonte::find($id);
        return view('admin.editarFonte', compact('registro'));
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

        Fonte::find($id)->update($dados);

        return redirect()->route('admin.fontes');
    }

    public function deletar($id)
    {
        Fonte::find($id)->delete();

        return redirect()->route('admin.fontes');
    }
}
