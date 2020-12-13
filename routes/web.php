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

Route::get('/admin/clientes',['as'=>'admin.cursos','uses'=>'Admin\ClienteController@index']);
Route::get('/admin/clientes/adicionar',['as'=>'admin.cursos.adicionar','uses'=>'Admin\ClienteController@adicionar']);
Route::post('/admin/clientes/salvar',['as'=>'admin.cursos.salvar','uses'=>'Admin\ClienteController@salvar']);
Route::get('/admin/clientes/editar/{id}',['as'=>'admin.cursos.editar','uses'=>'Admin\ClienteController@editar']);
Route::put('/admin/clientes/atualizar/{id}',['as'=>'admin.cursos.atualizar','uses'=>'Admin\ClienteController@atualizar']);
Route::get('/admin/clientes/deletar/{id}',['as'=>'admin.cursos.deletar','uses'=>'Admin\ClienteController@deletar']);

Route::get('/admin/clientes',['as'=>'admin.cursos','uses'=>'Admin\ClienteController@index']);
Route::get('/admin/clientes/adicionar',['as'=>'admin.cursos.adicionar','uses'=>'Admin\ClienteController@adicionar']);
Route::post('/admin/clientes/salvar',['as'=>'admin.cursos.salvar','uses'=>'Admin\ClienteController@salvar']);
Route::get('/admin/clientes/editar/{id}',['as'=>'admin.cursos.editar','uses'=>'Admin\ClienteController@editar']);
Route::put('/admin/clientes/atualizar/{id}',['as'=>'admin.cursos.atualizar','uses'=>'Admin\ClienteController@atualizar']);
Route::get('/admin/clientes/deletar/{id}',['as'=>'admin.cursos.deletar','uses'=>'Admin\ClienteController@deletar']);
