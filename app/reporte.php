<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reporte extends Model
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
            'asunto',                     
            'domicilio',
            'colonia',  
            'descripcion_hecho', 
            'hubo_acuerdos',
            'descripcion_acuerdos', 
            'observaciones', 
            'archivo_imagen',
            'archivo',
            'user_registro'
          
            ];
}
