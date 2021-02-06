<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Tria;

class TriaController extends Controller
{
    public function index()
    {
        $registros = Tria::all();
        return view('admin.trias', compact('registros'));
    }

    public function adicionar()
    {
        return view('admin.adicionarTria');
    }

    public function salvar(Request $req)
    {
        /* ------Validação-------------------------------------------------------------- */
        $req->validate([
            'serial' => ['required', 'max:20', 'min:3'],
            'modelo' => ['required', 'max:20', 'min:3']/* ,
            'email' => ['required', 'email', 'unique:antenas'] */,
            'notafiscal' => ['required', 'integer'],
            'banda' => ['required', 'alpha', 'max:2', 'min:2']/* ,
            'photo' => ['required', 'mimes:jpeg,bmp,png'] */,
            'datanota' => ['required', 'date_format:d/m/Y'],
            'fabricante' => ['required', 'alpha_num', 'max:50', 'min:3']/* ,
            'diametro'=>['required', 'integer'] */
        ]);
        /* ------Validação-------------------------------------------------------------- */


        $dados = $req->all();


        /*  if(isset($dados['ativo']))
        {
            $dados['ativo'] = 'sim';
        }else
        {
            $dados['ativo'] = 'nao';
        } */

        Tria::Create($dados);

        return redirect()->route('admin.trias');
    }

    public function detalhes($id)
    {
        $registro = Tria::find($id);
        return view('admin.detalhesTria', compact('registro'));
    }

    public function editar($id)
    {
        $registro = Tria::find($id);
        return view('admin.editarTria', compact('registro'));
    }

    public function atualizar(Request $req, $id)
    {
        $dados = $req->all();

        /* if(isset($dados['ativo']))
        {
            $dados['ativo'] = 'sim';
        }else
        {
            $dados['ativo'] = 'nao';
        } */

        Tria::find($id)->update($dados);

        return redirect()->route('admin.trias');
    }

    public function deletar($id)
    {
        Tria::find($id)->delete();

        return redirect()->route('admin.trias');
    }
}
