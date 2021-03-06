<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
//use Maatwebsite\Excel\Concerns\WithDrawings;
use Maatwebsite\Excel\Concerns\WithEvents;
use PhpOffice\PhpSpreadsheet\Worksheet\BaseDrawing;

use DB;

//class ReportesExport implements WithDrawings, FromCollection, WithHeadings
class MinutasRJGSeguimientoExport implements FromCollection, WithHeadings
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
        
     return DB::table('seguimientominutas')->select("cat_delegaciones.delegacion","cat_delegaciones.region","cat_coord_territorials.sector","cat_coord_territorials.ct2","seguimientominutas.id","seguimientominutas.fecha","seguimientominutas.hora_i","seguimientominutas.numero","seguimientominutas.resolucion","seguimientominutas.created_at","seguimientominutas.updated_at")
                    ->leftjoin('users','users.id','=','seguimientominutas.user_registro') 
                    ->leftjoin('cat_coord_territorials','cat_coord_territorials.ct2','=','users.name')
                    ->leftjoin('cat_delegaciones','cat_delegaciones.id','=','cat_coord_territorials.id_alcaldia') 
                    //->leftjoin('cat_cuadrantes','cat_cuadrantes.id','=','seguimientominutas.id_cuadrante')
                    ->where('cat_coord_territorials.id_alcaldia',\Auth::user()->delegacion_user) 

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
            'FECHA DE ACTUALIZACIÓN Ó MODIFICACIÓN DEL REGISTRO'
            
            
           
            
        ];
    }



}
