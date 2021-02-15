<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modem;

class ModemController extends Controller
{
    public function index()
    {
        $registros = Modem::all();
        return view('admin.modens', compact('registros'));
    }

    public function adicionar()
    {
        return view('admin.adicionarModem');
    }

    public function salvar(Request $req)
    {
        /* ------Validação-------------------------------------------------------------- */
        $req->validate([
            'serial' => ['required', 'max:20', 'min:3'],
            'modelo' => ['required', 'max:20', 'min:3'],
            /* 'email' => ['required', 'email', 'unique:antenas'], */
               'notafiscal' => ['required', 'integer'],
             /*   'banda' => ['required', 'alpha', 'max:2', 'min:2'], */
           /*  'photo' => ['required', 'mimes:jpeg,bmp,png'], */
               'datanota' => ['required', 'date_format:d/m/Y'],
               'fabricante' => ['required', 'alpha_num', 'max:50', 'min:3'],
              /*  'metros' => ['required'], */
              /*  'tipodecabo' => ['required'], */
           /*  'diametro'=>['required', 'integer'], */
            'macaddress' =>['required', 'max:12', 'min:12']
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

        Modem::Create($dados);

        return redirect()->route('admin.modens');
    }

    public function detalhes($id)
    {
        $registro = Modem::find($id);
        return view('admin.detalhesModem', compact('registro'));
    }

    public function editar($id)
    {
        $registro = Modem::find($id);
        return view('admin.editarModem', compact('registro'));
    }

    public function atualizar(Request $req, $id)
    {
        /* ----Validação---Outra maneira de validar-----(Usando "editar/atualizar")---- */
        /*  Método make() é que faz a validação */
        /*  1º parâmetro: Teria que ser um array, mas o método */
        /*  all() vai retornar todos os campos, em formato de array */
        /*  2º parâmetro, as regras de validação */
        Validator::make($req->all(), [
            'serial' => ['required', 'max:20', 'min:3'],
            'modelo' => ['required', 'max:20', 'min:3'],
            'notafiscal' => ['required', 'integer'],
            'datanota' => ['required', 'date_format:d/m/Y'],
            'fabricante' => ['required', 'alpha_num', 'max:50', 'min:3'],
            'macaddress' =>['required', 'max:12', 'min:12']
        ])->validate();
        /* ------Validação------------------------------------------------------------- */

        $dados = $req->all();

        Modem::find($id)->update($dados);

        return redirect()->route('admin.modens');
    }

    public function deletar($id)
    {
        Modem::find($id)->delete();

        return redirect()->route('admin.modens');
    }
}
           
