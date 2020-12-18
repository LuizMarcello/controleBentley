<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Tecnico;

class TecnicoController extends Controller
{
    public function index()
    {
        $registros = Tecnico::all();
        return view('admin.tecnicos', compact('registros'));
    }
}


