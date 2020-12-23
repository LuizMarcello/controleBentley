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
        $dados = $req->all();

        Modem::Create($dados);

        return redirect()->route('admin.modens');
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
        



