<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\iLnb;

class IlnbController extends Controller
{
    public function index()
    {
        $registros = iLnb::all();
        return view('admin.ilnbs', compact('registros'));
    }

    public function adicionar()
    {
        return view('admin.adicionarIlnb');
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

        iLnb::Create($dados);

        return redirect()->route('admin.ilnbs');
    }

    public function editar($id)
    {
        $registro = iLnb::find($id);
        return view('admin.editarIlnb', compact('registro'));
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

        iLnb::find($id)->update($dados);

        return redirect()->route('admin.ilnbs');
    }

    public function deletar($id)
    {
        iLnb::find($id)->delete();

        return redirect()->route('admin.ilnbs');
    }
}
