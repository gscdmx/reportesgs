<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeguimientominutasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seguimientominutas', function (Blueprint $table) {
            $table->bigIncrements('id');
            //$table->integer('id_user'); 
            $table->integer('id_cuadrante')->nullable();
            $table->integer('user_registro')->nullable();
            $table->string('region')->nullable();
            $table->date('fecha')->nullable();
            $table->time('hora_i')->nullable();
            $table->string('numero')->nullable();
            $table->text('resolucion')->nullable();      
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
        Schema::dropIfExists('seguimientominutas');
    }
}
