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
        $dados = $req->all();


        Plano::Create($dados);

        return redirect()->route('admin.planos');
    }
}
