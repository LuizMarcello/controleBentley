<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Lnb;

class LnbController extends Controller
{
    public function index()
    {
        $registros = Lnb::all();
        return view('admin.lnbs', compact('registros'));
    }

    public function adicionar()
    {
        return view('admin.adicionarLnb');
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

        Lnb::Create($dados);

        return redirect()->route('admin.lnbs');
    }

    public function editar($id)
    {
        $registro = Lnb::find($id);
        return view('admin.editarLnb', compact('registro'));
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

        Lnb::find($id)->update($dados);

        return redirect()->route('admin.lnbs');
    }

    public function deletar($id)
    {
        Lnb::find($id)->delete();

        return redirect()->route('admin.lnbs');
    }
}
