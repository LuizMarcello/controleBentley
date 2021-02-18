<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Roteador;
use App\Http\Requests\RoteadorRequest;
use Illuminate\Validation\Validator as ValidationValidator;

class RoteadorController extends Controller
{
    public function index()
    {
        $registros = Roteador::all();
        return view('admin.roteadores', compact('registros'));
    }

    public function adicionar()
    {
        return view('admin.adicionarRoteador');
    }

    /* ----Validação--3º maneira, usando a classe "RoteadorRequest" criada-------- */
    /* Alterando a classe "Request" injetada no parâmetro, para "RoteadorRequest": */
    public function salvar(RoteadorRequest $req)
    {
        $dados = $req->all();

        Roteador::Create($dados);

        return redirect()->route('admin.roteadores');
    }

    public function detalhes($id)
    {
        $registro = Roteador::find($id);
        return view('admin.detalhesRoteador', compact('registro'));
    }

    public function editar($id)
    {
        $registro = Roteador::find($id);
        return view('admin.editarRoteador', compact('registro'));
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
            'macaddress' => ['required', 'max:12', 'min:12']
        ])->validate();
        /* ------Validação------------------------------------------------------------- */

        $dados = $req->all();

        Roteador::find($id)->update($dados);

        return redirect()->route('admin.roteadores');
    }

    public function deletar($id)
    {
        Roteador::find($id)->delete();

        return redirect()->route('admin.roteadores');
    }
}
