<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tracing extends Model
{
    protected $fillable = [
           
            'id_user',
            'region',
            'id_cuadrante',
            'user_registro',
            'fecha',
            'hora_i',
            'numero',          
            'resolucion',                     
            'archivo_imagen',
            'archivo'
            
          
            ];
}
