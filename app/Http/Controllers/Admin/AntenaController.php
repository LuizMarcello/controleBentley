<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Validator;
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
        /* ------Validação-------------------------------------------------------------- */
        $req->validate([
         /* 'serial' => ['required', 'max:20', 'min:3'], */
            'modelo' => ['required', 'max:20', 'min:3'],
         /* 'email' => ['required', 'email', 'unique:antenas'], */
            'notafiscal' => ['required', 'integer'],
            'banda' => ['required', 'alpha', 'max:2', 'min:2']/* ,
            'photo' => ['required', 'mimes:jpeg,bmp,png'] */,
            'datanota' => ['required', 'date_format:d/m/Y'],
            'fabricante' => ['required', 'alpha_num', 'max:50', 'min:3'],
            'diametro'=>['required', 'integer']
        ]);
        /* ------Validação-------------------------------------------------------------- */

        $dados = $req->all();

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
        /* ----Validação---Outra maneira de validar-----(Usando "editar/atualizar")----------- */
        /*  Método make() é que faz a validação */
        /*  1º parâmetro: Teria que ser um array, mas o método */
        /*  all() vai retornar todos os campos, em formato de array */
        /*  2º parâmetro, as regras de validação */
        Validator::make($req->all(), [
            'modelo' => ['required', 'max:20', 'min:3'],
            'notafiscal' => ['required', 'integer'],
            'banda' => ['required', 'alpha', 'max:2', 'min:2'],
            'datanota' => ['required', 'date_format:d/m/Y'],
            'fabricante' => ['required', 'alpha_num', 'max:50', 'min:3'],
            'diametro'=>['required', 'integer']
        ])->validate();
        /* ------Validação----------------------------------------------------------------- */

        $dados = $req->all();

        Antena::find($id)->update($dados);

        return redirect()->route('admin.antenas');
    }

    public function deletar($id)
    {
        Antena::find($id)->delete();

        return redirect()->route('admin.antenas');
    }
}
       

        

