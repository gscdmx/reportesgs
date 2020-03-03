<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
//use Maatwebsite\Excel\Concerns\WithDrawings;
use Maatwebsite\Excel\Concerns\WithEvents;
use PhpOffice\PhpSpreadsheet\Worksheet\BaseDrawing;

use DB;

//class ReportesExport implements WithDrawings, FromCollection, WithHeadings
class SeguimientoExport implements FromCollection, WithHeadings
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
        
     return DB::table('tracings')->select("cat_delegaciones.delegacion","cat_delegaciones.region","cat_coord_territorials.sector","cat_coord_territorials.ct2","tracings.id","tracings.fecha","tracings.hora_i","tracings.numero","tracings.resolucion","tracings.created_at","tracings.updated_at","tracings.archivo_imagen","tracings.archivo")
                    ->leftjoin('users','users.id','=','tracings.user_registro') 
                    ->leftjoin('cat_coord_territorials','cat_coord_territorials.ct2','=','users.name')
                    ->leftjoin('cat_delegaciones','cat_delegaciones.id','=','cat_coord_territorials.id_alcaldia') 
                    //->leftjoin('cat_cuadrantes','cat_cuadrantes.id','=','tracings.id_cuadrante')
                     ->where('tracings.user_registro',\Auth::user()->id)
                    ->get();

    }

   public function headings(): array
    {
    	  	

        return [
            
            'ALCALDÍA',	
            'REGIÓN',	
            'SECTOR',
            'COORDINACIÓN TERRITORIAL',
            'ID DE LA APP',  	
            'FECHA DE RESOLUCIÓN',	
            'HORA DE RESOLUCIÓN',
            'ID RJG',	
            'RESOLUCIÓN DEL ACUERDO',
            'FECHA REAL DE CAPTURA',
            'FECHA DE ACTUALIZACIÓN Ó MODIFICACIÓN DEL REGISTRO',
            'CON IMAGEN',
            'CON ARCHIVO PDF'
            
           
            
        ];
    }



}
