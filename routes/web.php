<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('admin.home');
});

Route::get('/',['as'=>'admin.home','uses'=>'Admin\EstoquetotalController@index']);
Route::get('/admin/estoquetotal',['as'=>'admin.estoquetotal','uses'=>'Admin\EstoquetotalController@estoquetotal']);
Route::get('/admin/estoquetotal/adicionar',['as'=>'admin.estoquetotal.adicionar','uses'=>'Admin\EstoquetotalController@adicionar']);
Route::post('/admin/estoquetotal/salvar',['as'=>'admin.estoquetotal.salvar','uses'=>'Admin\EstoquetotalController@salvar']);
Route::get('/admin/estoquetotal/editar/{id}',['as'=>'admin.estoquetotal.editar','uses'=>'Admin\EstoquetotalController@editar']);
Route::put('/admin/estoquetotal/atualizar/{id}',['as'=>'admin.estoquetotal.atualizar','uses'=>'Admin\EstoquetotalController@atualizar']);
Route::get('/admin/estoquetotal/deletar/{id}',['as'=>'admin.estoquetotal.deletar','uses'=>'Admin\EstoquetotalController@deletar']);

Route::get('/admin/clientes',['as'=>'admin.clientes','uses'=>'Admin\ClienteController@index']);
Route::get('/admin/clientes/adicionar',['as'=>'admin.clientes.adicionar','uses'=>'Admin\ClienteController@adicionar']);
Route::post('/admin/clientes/salvar',['as'=>'admin.clientes.salvar','uses'=>'Admin\ClienteController@salvar']);
Route::get('/admin/clientes/editar/{id}',['as'=>'admin.clientes.editar','uses'=>'Admin\ClienteController@editar']);
Route::put('/admin/clientes/atualizar/{id}',['as'=>'admin.clientes.atualizar','uses'=>'Admin\ClienteController@atualizar']);
Route::get('/admin/clientes/deletar/{id}',['as'=>'admin.clientes.deletar','uses'=>'Admin\ClienteController@deletar']);

Route::get('/admin/designacao',['as'=>'admin.designacao','uses'=>'Admin\DesignacaoController@index']);
Route::get('/admin/designacao/adicionar',['as'=>'admin.designacao.adicionar','uses'=>'Admin\DesignacaoController@adicionar']);
Route::post('/admin/designacao/salvar',['as'=>'admin.designacao.salvar','uses'=>'Admin\DesignacaoController@salvar']);
Route::get('/admin/designacao/editar/{id}',['as'=>'admin.designacao.editar','uses'=>'Admin\DesignacaoController@editar']);
Route::put('/admin/designacao/atualizar/{id}',['as'=>'admin.designacao.atualizar','uses'=>'Admin\DesignacaoController@atualizar']);
Route::get('/admin/designacao/deletar/{id}',['as'=>'admin.designacao.deletar','uses'=>'Admin\DesignacaoController@deletar']);

Route::get('/admin/distribuidores',['as'=>'admin.distribuidores','uses'=>'Admin\DistribuidorController@index']);
Route::get('/admin/distribuidores/adicionar',['as'=>'admin.distribuidores.adicionar','uses'=>'Admin\DistribuidorController@adicionar']);
Route::post('/admin/distribuidores/salvar',['as'=>'admin.distribuidores.salvar','uses'=>'Admin\DistribuidorController@salvar']);
Route::get('/admin/distribuidores/editar/{id}',['as'=>'admin.distribuidores.editar','uses'=>'Admin\DistribuidorController@editar']);
Route::put('/admin/distribuidores/atualizar/{id}',['as'=>'admin.distribuidores.atualizar','uses'=>'Admin\DistribuidorController@atualizar']);
Route::get('/admin/distribuidores/deletar/{id}',['as'=>'admin.distribuidores.deletar','uses'=>'Admin\DistribuidorController@deletar']);

Route::get('/admin/modens',['as'=>'admin.modens','uses'=>'Admin\ModemController@index']);
Route::get('/admin/modens/adicionar',['as'=>'admin.modens.adicionar','uses'=>'Admin\ModemController@adicionar']);
Route::post('/admin/modens/salvar',['as'=>'admin.modens.salvar','uses'=>'Admin\ModemController@salvar']);
Route::get('/admin/modens/editar/{id}',['as'=>'admin.modens.editar','uses'=>'Admin\ModemController@editar']);
Route::put('/admin/modens/atualizar/{id}',['as'=>'admin.modens.atualizar','uses'=>'Admin\ModemController@atualizar']);
Route::get('/admin/modens/deletar/{id}',['as'=>'admin.modens.deletar','uses'=>'Admin\ModemController@deletar']);

Route::get('/admin/tecnicos',['as'=>'admin.tecnicos','uses'=>'Admin\TecnicoController@index']);
Route::get('/admin/tecnicos/adicionar',['as'=>'admin.tecnicos.adicionar','uses'=>'Admin\TecnicoController@adicionar']);
Route::post('/admin/tecnicos/salvar',['as'=>'admin.tecnicos.salvar','uses'=>'Admin\TecnicoController@salvar']);
Route::get('/admin/tecnicos/editar/{id}',['as'=>'admin.tecnicos.editar','uses'=>'Admin\TecnicoController@editar']);
Route::put('/admin/tecnicos/atualizar/{id}',['as'=>'admin.tecnicos.atualizar','uses'=>'Admin\TecnicoController@atualizar']);
Route::get('/admin/tecnicos/deletar/{id}',['as'=>'admin.tecnicos.deletar','uses'=>'Admin\TecnicoController@deletar']);
