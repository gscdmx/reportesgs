<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reportes', function (Blueprint $table) {
            $table->bigIncrements('id');
            //$table->string('id_ct')->nullable();
            //$table->integer('id_user'); 
            $table->integer('id_cuadrante')->nullable();
            $table->string('region')->nullable();
            $table->date('fecha')->nullable();
            $table->time('hora_i')->nullable();
            $table->time('hora_f')->nullable();
            $table->string('tipo_documento')->nullable();
            $table->string('asunto')->nullable();
            $table->string('domicilio')->nullable();   
            $table->string('colonia')->nullable();
            $table->string('descripcion_hecho')->nullable();
            $table->string('hubo_acuerdos')->nullable();
            $table->string('descripcion_acuerdos')->nullable();
            $table->string('observaciones')->nullable();  
            $table->text('archivo_imagen')->nullable();   
            $table->text('archivo')->nullable(); 
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
        Schema::dropIfExists('reportes');
    }
}
