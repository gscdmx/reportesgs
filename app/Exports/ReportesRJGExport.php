<?php

namespace App\Exports;


use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use DB;


//class ReportesExport implements WithDrawings, FromCollection, WithHeadings
class ReportesRJGExport implements FromView

{
   
    public function view(): View
    {
         
      $query = DB::table('reportes')->select("cat_delegaciones.delegacion","cat_delegaciones.region","cat_coord_territorials.sector","cat_coord_territorials.ct2","reportes.id","reportes.fecha","reportes.hora_i","reportes.hora_f","reportes.tipo_documento","reportes.asunto","reportes.domicilio","reportes.colonia","reportes.descripcion_hecho","reportes.hubo_acuerdos","reportes.descripcion_acuerdos","reportes.observaciones","reportes.archivo_imagen","reportes.archivo","reportes.created_at","reportes.updated_at")
                    ->leftjoin('users','users.id','=','reportes.user_registro') 
                    ->leftjoin('cat_coord_territorials','cat_coord_territorials.ct2','=','users.name')
                    ->leftjoin('cat_delegaciones','cat_delegaciones.id','=','cat_coord_territorials.id_alcaldia') 
                    //->leftjoin('cat_cuadrantes','cat_cuadrantes.id','=','reportes.id_cuadrante')
                    ->where('cat_coord_territorials.id_alcaldia',\Auth::user()->delegacion_user)  
                    ->get();

   return view('tablas_excel_base.reporterjgalcaldias', [
            'datos' => $query
        ]);
    }




}