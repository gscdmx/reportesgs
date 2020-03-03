<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class minutas extends Model
{
    protected $fillable = [
            //'id_ct',
            'id_user',
            'region',
            'id_cuadrante',
            'fecha',
            'hora_i',
            'hora_f',
            'tipo_documento',          
            'otro_documento',                     
            'lugar',
            'reporte',  
            'otro_informe', 
            'acuerdos',
            'user_registro'
          
            ];
}
