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
        /* ------Validação-------------------------------------------------------------- */
        $req->validate([
         /* 'serial' => ['required', 'max:20', 'min:3'], */
         /* 'modelo' => ['required', 'max:20', 'min:3'], */
         /* 'email' => ['required', 'email', 'unique:antenas'], */
         /* 'notafiscal' => ['required', 'integer'], */
            'banda' => ['required', 'alpha', 'max:2', 'min:2'],
        /*  'photo' => ['required', 'mimes:jpeg,bmp,png'], */
        /*  'datanota' => ['required', 'date_format:d/m/Y'], */
        /*  'fabricante' => ['required', 'alpha_num', 'max:50', 'min:3'], */
        /*  'diametro'=>['required', 'integer'], */
        /*  'macaddress' =>['required', 'max:12', 'min:12'] */
        /*  'voltagem' => ['required', 'integer', 'max:220', 'min:110'], */
            'nome' => ['required'],
            'velocmaxdown' => ['required'],
            'velocmaxup' => ['required'],
            'equipamento' => ['required'],
            'velocmindown' => ['required'],
            'velocminup' => ['required'],
            'valordecusto' => ['required'],
            'valormensal' => ['required'],
            'cir' => ['required']
        ]);
        /* ------Validação-------------------------------------------------------------- */

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

        Plano::find($id)->update($dados);

        return redirect()->route('admin.planos');
    }

    public function deletar($id)
    {
        Plano::find($id)->delete();

        return redirect()->route('admin.planos');
    }
}


