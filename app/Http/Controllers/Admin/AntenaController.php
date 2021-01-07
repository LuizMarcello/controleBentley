<?php

namespace App\Http\Controllers\Admin;

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
}
