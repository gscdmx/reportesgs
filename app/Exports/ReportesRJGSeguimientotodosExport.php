<?php

namespace App\Exports;


use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use DB;


//class ReportesExport implements WithDrawings, FromCollection, WithHeadings
class ReportesRJGSeguimientotodosExport implements FromView
{
   
     public function view(): View
    {
        
     $query = DB::table('tracings')->select("cat_delegaciones.delegacion","cat_delegaciones.region","cat_coord_territorials.sector","cat_coord_territorials.ct2","tracings.id","tracings.fecha","tracings.hora_i","tracings.numero","tracings.resolucion","tracings.created_at","tracings.updated_at","tracings.archivo_imagen","tracings.archivo")
                    ->leftjoin('users','users.id','=','tracings.user_registro') 
                    ->leftjoin('cat_coord_territorials','cat_coord_territorials.ct2','=','users.name')
                    ->leftjoin('cat_delegaciones','cat_delegaciones.id','=','cat_coord_territorials.id_alcaldia') 
                    //->leftjoin('cat_cuadrantes','cat_cuadrantes.id','=','tracings.id_cuadrante')
                    //->where('cat_coord_territorials.id_alcaldia',\Auth::user()->delegacion_user)  
                    ->get();

    return view('tablas_excel_base.tracingrjg', [
            'datos' => $query
        ]);
    }




}
