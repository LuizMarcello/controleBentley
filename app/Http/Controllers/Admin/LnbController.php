<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Lnb;

class LnbController extends Controller
{
    public function index()
    {
        $registros = Lnb::all();
        return view('admin.lnbs', compact('registros'));
    }

    public function adicionar()
    {
        return view('admin.adicionarLnb');
    }

    public function salvar(Request $req)
    {
        /* ------Validação-------------------------------------------------------------- */
        $req->validate([
            'serial' => ['required', 'max:20', 'min:3'],
            'modelo' => ['required', 'max:20', 'min:3'],
            /* 'email' => ['required', 'email', 'unique:antenas'], */
               'notafiscal' => ['required', 'integer'],
               'banda' => ['required', 'alpha', 'max:2', 'min:2'],
           /*  'photo' => ['required', 'mimes:jpeg,bmp,png'], */
              /*  'datanota' => ['required', 'date_format:d/m/Y'], */
               'datadanota' => ['required', 'date_format:d/m/Y'],
               'fabricante' => ['required', 'alpha_num', 'max:50', 'min:3']
               /*  'metros' => ['required'], */
                /* 'tipodecabo' => ['required'], */
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

         Lnb::Create($dados);

         return redirect()->route('admin.lnbs');
     }

     public function detalhes($id)
     {
         $registro = Lnb::find($id);
         return view('admin.detalhesLnb', compact('registro'));
     }

     public function editar($id)
     {
         $registro = Lnb::find($id);
         return view('admin.editarLnb', compact('registro'));
     }

     public function atualizar(Request $req, $id)
     {
         $dados = $req->all();

         Lnb::find($id)->update($dados);

         return redirect()->route('admin.lnbs');
     }

     public function deletar($id)
     {
         Lnb::find($id)->delete();

         return redirect()->route('admin.lnbs');
     }
 }
