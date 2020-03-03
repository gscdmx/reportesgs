<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
//use Maatwebsite\Excel\Concerns\WithDrawings;
use Maatwebsite\Excel\Concerns\WithEvents;
use PhpOffice\PhpSpreadsheet\Worksheet\BaseDrawing;

use DB;

//class ReportesExport implements WithDrawings, FromCollection, WithHeadings
class MinutasExport implements FromCollection, WithHeadings
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
        
     return DB::table('minutas')->select("cat_delegaciones.delegacion","cat_delegaciones.region","cat_coord_territorials.sector","cat_coord_territorials.ct2","minutas.id","minutas.fecha","minutas.hora_i","minutas.hora_f","minutas.tipo_documento","minutas.otro_documento","minutas.lugar","minutas.reporte","minutas.otro_informe","minutas.acuerdos","minutas.created_at","minutas.updated_at")
                    ->leftjoin('users','users.id','=','minutas.user_registro') 
                    ->leftjoin('cat_coord_territorials','cat_coord_territorials.ct2','=','users.name')
                    ->leftjoin('cat_delegaciones','cat_delegaciones.id','=','cat_coord_territorials.id_alcaldia') 
                    //->leftjoin('cat_cuadrantes','cat_cuadrantes.id','=','minutas.id_cuadrante')
                    ->where('minutas.user_registro',\Auth::user()->id)
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
            'FECHA GABINETE',	
            'HORA DE INICIO',	
            'HORA DE CIERRE',
            'TIPO DE DOCUMENTO',                
            'EN CASO DE OTRO ESPECIFICO EL DOCUMENTO',	
            'LUGAR EN EL QUE SE LLEVÓ A CABO',	
            'REPORTE DE INCIDENCIA',	
            'OTROS INFORMES',	
            'ACUERDOS',
            'FECHA DE CAPTURA REAL',
            'FECHA DE ACTUALIZACIÓN Ó MODIFICACIÓN DEL REGISTRO'
           
            
        ];
    }



}
