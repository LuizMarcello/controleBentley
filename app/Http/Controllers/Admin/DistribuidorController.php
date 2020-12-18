<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Distribuidor;

class DistribuidorController extends Controller
{
    public function index()
    {
        $registros = Distribuidor::all();
        return view('admin.distribuidores', compact('registros'));
    }
}

