<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoteadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roteadors', function (Blueprint $table) {
            $table->id();
            $table->string('notafiscal', 20);
            $table->string('datanota', 20);
            $table->string('banda', 4);
            $table->string('fabricante', 30);
            $table->string('macaddress', 25);
            $table->string('modelo', 30);
            $table->string('serial', 20);
            $table->string('situacao', 20);
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
        Schema::dropIfExists('roteadors');
    }
}
            

