<?php

namespace App\Http\Controllers\Admin;

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
            'banda' => ['required', 'alpha', 'max:2', 'min:2']/* ,
            'photo' => ['required', 'mimes:jpeg,bmp,png'] */,
            'datanota' => ['required', 'date_format:d/m/Y'],
            'fabricante' => ['required', 'alpha_num', 'max:50', 'min:3'],
            /* 'diametro'=>['required', 'integer'], */
            'macaddress' =>['required', 'max:12', 'min:12']
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
