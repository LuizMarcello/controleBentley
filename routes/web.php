<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/clientes', function () {
    return view('clientes');
});

Route::get('/distribuidores', function () {
    return view('distribuidores');
});

Route::get('/tecnicos', function () {
    return view('tecnicos');
});

Route::get('/modens', function () {
    return view('modens');
});
