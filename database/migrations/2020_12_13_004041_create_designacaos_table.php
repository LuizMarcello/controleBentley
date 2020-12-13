<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesignacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('designacaos', function (Blueprint $table) {
            $table->id();
            $table->string('modeloModem');
            $table->string('serialModem');
            $table->string('bandaModem');
            $table->string('modeloNlb');
            $table->string('serialNlb');
            $table->string('modeloAntena');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('designacaos');
    }
}
