<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Cabo;

class CaboController extends Controller
{
    public function index()
    {
        $registros = Cabo::all();
        return view('admin.cabos', compact('registros'));
    }

    public function adicionar()
    {
        return view('admin.adicionarCabo');
    }

    public function salvar(Request $req)
    {
        /* ------Validação-------------------------------------------------------------- */
        $req->validate([
            /* 'serial' => ['required', 'max:20', 'min:3'], */
            /* 'modelo' => ['required', 'max:20', 'min:3'], */
            /* 'email' => ['required', 'email', 'unique:antenas'], */
               'notafiscal' => ['required', 'integer'],
               'banda' => ['required', 'alpha', 'max:2', 'min:2'],
           /*  'photo' => ['required', 'mimes:jpeg,bmp,png'], */
               'datanota' => ['required', 'date_format:d/m/Y'],
               'fabricante' => ['required', 'alpha_num', 'max:50', 'min:3'],
               'metros' => ['required'],
               'tipodecabo' => ['required']
           /*  'diametro'=>['required', 'integer'], */
           /*  'macaddress' =>['required', 'max:12', 'min:12'] */
           /*  'voltagem' => ['required', 'integer', 'max:220', 'min:110'], */
           /*  'nome' => ['required'], */
           /*  'velocmaxdown' => ['required'], */
           /*  'velocmaxup' => ['required'], */
           /*  'equipamento' => ['required'], */
           /*  'velocmindown' => ['required'], */
           /*  'velocminup' => ['required'], */
           /*  'valordecusto' => ['required'], */
           /*  'valormensal' => ['required'], */
           /*  'cir' => ['required'] */
           ]);
           /* ------Validação-------------------------------------------------------------- */

        $dados = $req->all();

        Cabo::Create($dados);

        return redirect()->route('admin.cabos');
    }

    public function detalhes($id)
    {
        $registro = Cabo::find($id);
        return view('admin.detalhesCabo', compact('registro'));
    }

    public function editar($id)
    {
        $registro = Cabo::find($id);
        return view('admin.editarCabo', compact('registro'));
    }

    public function atualizar(Request $req, $id)
    {
         /* ----Validação---Outra maneira de validar-----(Usando "editar/atualizar")---- */
        /*  Método make() é que faz a validação */
        /*  1º parâmetro: Teria que ser um array, mas o método */
        /*  all() vai retornar todos os campos, em formato de array */
        /*  2º parâmetro, as regras de validação */
        Validator::make($req->all(), [
            'notafiscal' => ['required', 'integer'],
            'banda' => ['required', 'alpha', 'max:2', 'min:2'],
            'datanota' => ['required', 'date_format:d/m/Y'],
            'fabricante' => ['required', 'alpha_num', 'max:50', 'min:3'],
            'metros' => ['required'],
            'tipodecabo' => ['required']
        ])->validate();
        /* ------Validação------------------------------------------------------------- */

        $dados = $req->all();

        Cabo::find($id)->update($dados);

        return redirect()->route('admin.cabos');
    }

    public function deletar($id)
    {
        Cabo::find($id)->delete();

        return redirect()->route('admin.cabos');
    }
}
