<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clientes', function (Blueprint $table) {
            $table->string('email', 30);
            $table->string('dataNascimento', 10);
            $table->string('endereco', 50);
            $table->string('cep', 12);
            $table->string('dataCadastro', 12);
            $table->string('celular', 12);
            $table->string('ie', 16);
            $table->string('ufie', 16);
            $table->string('instalador', 50);
            $table->string('banda', 4);
            $table->string('plano', 50);
            $table->string('valor', 12);
            $table->string('dataAdesao', 12);
            $table->String('observacao', 200);
            $table->String('migracao', 200);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clientes', function (Blueprint $table) {
            $table->dropColumn('email');
            $table->dropColumn('dataNascimento');
            $table->dropColumn('endereco');
            $table->dropColumn('cep');
            $table->dropColumn('dataCadastro');
            $table->dropColumn('telefone');
            $table->dropColumn('celular');
            $table->dropColumn('ie');
            $table->dropColumn('ufie');
            $table->dropColumn('instalador');
            $table->dropColumn('banda');
            $table->dropColumn('plano');
            $table->dropColumn('valor');
            $table->dropColumn('dataAdesao');
            $table->dropColumn('observacao');
            $table->dropColumn('migracao');
        });
    }
}
           
