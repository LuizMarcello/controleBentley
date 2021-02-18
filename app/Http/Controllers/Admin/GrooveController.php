<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Groove;
use App\Http\Requests\GrooveRequest;
use Illuminate\Validation\Validator as ValidationValidator;

class GrooveController extends Controller
{
    public function index()
    {
        $registros = Groove::all();
        return view('admin.grooves', compact('registros'));
    }

    public function adicionar()
    {
        return view('admin.adicionarGroove');
    }

    /* ----Validação--3º maneira, usando a classe "GrooveRequest" criada-------- */
    /* Alterando a classe "Request" injetada no parâmetro, para "GrooveRequest": */
    public function salvar(GrooveRequest $req)
    {
        $dados = $req->all();

        Groove::Create($dados);

        return redirect()->route('admin.grooves');
    }

    public function detalhes($id)
    {
        $registro = Groove::find($id);
        return view('admin.detalhesGroove', compact('registro'));
    }

    public function editar($id)
    {
        $registro = Groove::find($id);
        return view('admin.editarGroove', compact('registro'));
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
            'datadanota' => ['required', 'date_format:d/m/Y'],
            'marca' => ['required', 'alpha_num', 'max:50', 'min:3'],
            'banda' => ['required', 'alpha', 'max:2', 'min:2']

        ])->validate();
        /* ------Validação------------------------------------------------------------- */

        $dados = $req->all();

        Groove::find($id)->update($dados);

        return redirect()->route('admin.grooves');
    }
}
