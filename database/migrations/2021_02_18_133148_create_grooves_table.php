<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroovesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grooves', function (Blueprint $table) {
            $table->id();
            $table->string('notafiscal');
            $table->string('datadanota');
            $table->string('marca');
            $table->string('modelo');
            $table->string('serial');
            $table->string('banda');
            $table->string('situacao');
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
        Schema::dropIfExists('grooves');
    }
}


