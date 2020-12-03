<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesignacaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('designacao', function (Blueprint $table) {
            $table->id();
            $table->string('modemSerial',30);
            $table->string('modemModelo',30);
            $table->string('bucSerial',30);
            $table->string('bucModelo',30);
            $table->string('nlbSerial',30);
            $table->string('nlbModelo',30);
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
        Schema::dropIfExists('designacao');
    }
}
