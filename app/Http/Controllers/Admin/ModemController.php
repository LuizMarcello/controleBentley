<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modem;

class ModemController extends Controller
{
    public function index()
    {
        $registros = Modem::all();
        return view('admin.modens', compact('registros'));
    }
}


