<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMinutasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('minutas', function (Blueprint $table) {
            $table->bigIncrements('id');
            //$table->integer('id_user'); 
            $table->integer('id_cuadrante')->nullable();
            $table->string('region')->nullable();
            $table->date('fecha')->nullable();
            $table->time('hora_i')->nullable();
            $table->time('hora_f')->nullable();
            $table->string('tipo_documento')->nullable();
            $table->string('otro_documento')->nullable();
            $table->text('lugar')->nullable();   
            $table->text('reporte')->nullable();
            $table->text('otro_informe')->nullable();
            $table->text('acuerdos')->nullable();
            $table->integer('user_registro')->nullable();      
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
        Schema::dropIfExists('minutas');
    }
}
