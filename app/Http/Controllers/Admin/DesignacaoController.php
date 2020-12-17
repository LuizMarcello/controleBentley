<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DesignacaoController extends Controller
{
    public function index()
    {
        $registros = Designacao::all();
        return view('admin.designacao', compact('registros'));
    }
}

