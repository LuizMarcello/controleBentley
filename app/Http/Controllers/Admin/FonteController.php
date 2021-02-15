<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Validator;
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
        /* ------Validação-------------------------------------------------------------- */
        $req->validate([
            'serial' => ['required', 'max:20', 'min:3'],
            'modelo' => ['required', 'max:20', 'min:3'],
         /* 'email' => ['required', 'email', 'unique:antenas'], */
            'notafiscal' => ['required', 'integer'],
        /*  'banda' => ['required', 'alpha', 'max:2', 'min:2'], */
        /*  'photo' => ['required', 'mimes:jpeg,bmp,png'], */
            'datanota' => ['required', 'date_format:d/m/Y'],
            'fabricante' => ['required', 'alpha_num', 'max:50', 'min:3'],
         /* 'diametro'=>['required', 'integer'], */
        /*  'macaddress' =>['required', 'max:12', 'min:12'] */
            'voltagem' => ['required', 'integer', 'max:220', 'min:110']
        ]);
        /* ------Validação-------------------------------------------------------------- */

        $dados = $req->all();

        Fonte::Create($dados);

        return redirect()->route('admin.fontes');
    }

    public function detalhes($id)
    {
        $registro = Fonte::find($id);
        return view('admin.detalhesFonte', compact('registro'));
    }

    public function editar($id)
    {
        $registro = Fonte::find($id);
        return view('admin.editarFonte', compact('registro'));
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
            'voltagem' => ['required', 'integer', 'max:220', 'min:110']
        ])->validate();
        /* ------Validação------------------------------------------------------------- */

        $dados = $req->all();

        Fonte::find($id)->update($dados);

        return redirect()->route('admin.fontes');
    }

    public function deletar($id)
    {
        Fonte::find($id)->delete();

        return redirect()->route('admin.fontes');
    }
}


