<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
//use Maatwebsite\Excel\Concerns\WithDrawings;
use Maatwebsite\Excel\Concerns\WithEvents;
use PhpOffice\PhpSpreadsheet\Worksheet\BaseDrawing;

use DB;

//class ReportesExport implements WithDrawings, FromCollection, WithHeadings
class ReportesExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    
    //public function drawings()
    //{
        //$drawing = new \PhpOffice\PhpSpreadsheet\Worksheet\Drawing();
        //$drawing->setName('LOGOCGGSCYPJ');
        //$drawing->setDescription('logo');
        //$drawing->setPath(public_path('/img/logo.JPG'));
        //$drawing->setCoordinates('A1');
        //$drawing->setHeight(150);

        //return $drawing;
   // }

    public function collection()
    {
        
     return DB::table('reportes')->select("cat_delegaciones.delegacion","cat_delegaciones.region","cat_coord_territorials.sector","cat_coord_territorials.ct2","reportes.id","reportes.fecha","reportes.hora_i","reportes.hora_f","reportes.tipo_documento","reportes.asunto","reportes.domicilio","reportes.colonia","reportes.descripcion_hecho","reportes.hubo_acuerdos","reportes.descripcion_acuerdos","reportes.observaciones","reportes.archivo_imagen","reportes.archivo","reportes.created_at","reportes.updated_at")
                    ->leftjoin('users','users.id','=','reportes.user_registro') 
                    ->leftjoin('cat_coord_territorials','cat_coord_territorials.ct2','=','users.name')
                    ->leftjoin('cat_delegaciones','cat_delegaciones.id','=','cat_coord_territorials.id_alcaldia') 
                    //->leftjoin('cat_cuadrantes','cat_cuadrantes.id','=','reportes.id_cuadrante')
                    ->where('reportes.user_registro',\Auth::user()->id)
                    ->get();

    }

   public function headings(): array
    {
    	  	

        return [
            
            'ALCALDÍA',	
            'REGIÓN',	
            'SECTOR',
            'COORDINACIÓN TERRITORIAL',
            'ID',  	
            'FECHA DEL EVENTO',	
            'HORA DE EVENTO',	
            'HORA DE TÉRMINO DEL EVENTO',
            'TIPO DE DOCUMENTO',                
            'ASUNTO',	
            'DOMICILIO',	
            'COLONIA',	
            'DESCRIPCION DEL HECHO',	
            'HUBO ACUERDOS',
            'RESPUESTA SI, ESTE ES EL ACUERDO',
            'OBSERVACIONES',
            'CON IMAGEN',
            'CON ARCHIVO PDF',	
            'FECHA DE CAPTURA REAL',
            'FECHA DE ACTUALIZACIÓN Ó MODIFICACIÓN DEL REGISTRO'
           
            
        ];
    }



}
