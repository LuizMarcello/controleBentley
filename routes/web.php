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

Route::get('/admin/antenas',['as'=>'admin.antenas','uses'=>'Admin\AntenaController@index']);
Route::get('/admin/antenas/adicionar',['as'=>'admin.antenas.adicionar','uses'=>'Admin\AntenaController@adicionar']);
Route::post('/admin/antenas/salvar',['as'=>'admin.antenas.salvar','uses'=>'Admin\AntenaController@salvar']);
Route::get('/admin/antenas/editar/{id}',['as'=>'admin.antenas.editar','uses'=>'Admin\AntenaController@editar']);
Route::put('/admin/antenas/atualizar/{id}',['as'=>'admin.antenas.atualizar','uses'=>'Admin\AntenaController@atualizar']);
Route::get('/admin/antenas/deletar/{id}',['as'=>'admin.antenas.deletar','uses'=>'Admin\AntenaController@deletar']);

Route::get('/admin/trias',['as'=>'admin.trias','uses'=>'Admin\TriaController@index']);
Route::get('/admin/trias/adicionar',['as'=>'admin.trias.adicionar','uses'=>'Admin\TriaController@adicionar']);
Route::post('/admin/trias/salvar',['as'=>'admin.trias.salvar','uses'=>'Admin\TriaController@salvar']);
Route::get('/admin/trias/editar/{id}',['as'=>'admin.trias.editar','uses'=>'Admin\TriaController@editar']);
Route::put('/admin/trias/atualizar/{id}',['as'=>'admin.trias.atualizar','uses'=>'Admin\TriaController@atualizar']);
Route::get('/admin/trias/deletar/{id}',['as'=>'admin.trias.deletar','uses'=>'Admin\TriaController@deletar']);

Route::get('/admin/fontes',['as'=>'admin.fontes','uses'=>'Admin\FonteController@index']);
Route::get('/admin/fontes/adicionar',['as'=>'admin.fontes.adicionar','uses'=>'Admin\FonteController@adicionar']);
Route::post('/admin/fontes/salvar',['as'=>'admin.fontes.salvar','uses'=>'Admin\FonteController@salvar']);
Route::get('/admin/fontes/editar/{id}',['as'=>'admin.fontes.editar','uses'=>'Admin\FonteController@editar']);
Route::put('/admin/fontes/atualizar/{id}',['as'=>'admin.fontes.atualizar','uses'=>'Admin\FonteController@atualizar']);
Route::get('/admin/fontes/deletar/{id}',['as'=>'admin.fontes.deletar','uses'=>'Admin\FonteController@deletar']);

Route::get('/admin/cabos',['as'=>'admin.cabos','uses'=>'Admin\CaboController@index']);
Route::get('/admin/cabos/adicionar',['as'=>'admin.cabos.adicionar','uses'=>'Admin\CaboController@adicionar']);
Route::post('/admin/cabos/salvar',['as'=>'admin.cabos.salvar','uses'=>'Admin\CaboController@salvar']);
Route::get('/admin/cabos/editar/{id}',['as'=>'admin.cabos.editar','uses'=>'Admin\CaboController@editar']);
Route::put('/admin/cabos/atualizar/{id}',['as'=>'admin.cabos.atualizar','uses'=>'Admin\CaboController@atualizar']);
Route::get('/admin/cabos/deletar/{id}',['as'=>'admin.cabos.deletar','uses'=>'Admin\CaboController@deletar']);

Route::get('/admin/lnbs',['as'=>'admin.lnbs','uses'=>'Admin\LnbController@index']);
Route::get('/admin/lnbs/adicionar',['as'=>'admin.lnbs.adicionar','uses'=>'Admin\LnbController@adicionar']);
Route::post('/admin/lnbs/salvar',['as'=>'admin.lnbs.salvar','uses'=>'Admin\LnbController@salvar']);
Route::get('/admin/lnbs/editar/{id}',['as'=>'admin.lnbs.editar','uses'=>'Admin\LnbController@editar']);
Route::put('/admin/lnbs/atualizar/{id}',['as'=>'admin.lnbs.atualizar','uses'=>'Admin\LnbController@atualizar']);
Route::get('/admin/lnbs/deletar/{id}',['as'=>'admin.lnbs.deletar','uses'=>'Admin\LnbController@deletar']);

Route::get('/admin/ilnbs',['as'=>'admin.ilnbs','uses'=>'Admin\iLnbController@index']);
Route::get('/admin/ilnbs/adicionar',['as'=>'admin.ilnbs.adicionar','uses'=>'Admin\iLnbController@adicionar']);
Route::post('/admin/ilnbs/salvar',['as'=>'admin.ilnbs.salvar','uses'=>'Admin\iLnbController@salvar']);
Route::get('/admin/ilnbs/editar/{id}',['as'=>'admin.ilnbs.editar','uses'=>'Admin\iLnbController@editar']);
Route::put('/admin/ilnbs/atualizar/{id}',['as'=>'admin.ilnbs.atualizar','uses'=>'Admin\iLnbController@atualizar']);
Route::get('/admin/ilnbs/deletar/{id}',['as'=>'admin.ilnbs.deletar','uses'=>'Admin\iLnbController@deletar']);
