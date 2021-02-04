<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Antena;

class AntenaController extends Controller
{
    public function index()
    {
        $registros = Antena::all();
        return view('admin.antenas', compact('registros'));
    }

    public function adicionar()
    {
        return view('admin.adicionarAntena');
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

        Antena::Create($dados);

        return redirect()->route('admin.antenas');
    }

    public function detalhes($id)
    {
        $registro = Antena::find($id);
        return view('admin.detalhesAntena', compact('registro'));
    }

    public function editar($id)
    {
        $registro = Antena::find($id);
        return view('admin.editarAntena', compact('registro'));
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

        Antena::find($id)->update($dados);

        return redirect()->route('admin.antenas');
    }

    public function deletar($id)
    {
        Antena::find($id)->delete();

        return redirect()->route('admin.antenas');
    }
}
