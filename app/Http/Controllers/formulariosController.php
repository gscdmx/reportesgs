<?php

namespace App\Http\Controllers;

use App\reporte;
use Illuminate\Http\Request;
use DB;
use Validator;
use Illuminate\Support\Facades\Redirect;
//use Excel;
use App\Exports\ReportesExport;
use App\Exports\SeguimientoExport;
use App\Exports\MinutasExport;
use App\Exports\SeguimientoMinutasExport;

///POR ALCALDIAS
use App\Exports\ReportesRJGExport;
use App\Exports\ReportesRJGSeguimientoExport;
use App\Exports\MinutasRJGExport;
use App\Exports\MinutasRJGSeguimientoExport;
//////TODOS C.T
use App\Exports\ReportesRJGtodosExport;
use App\Exports\ReportesRJGtodosExportView;
use App\Exports\ReportesRJGSeguimientotodosExport;
use App\Exports\MinutasRJGtodosExport;
use App\Exports\MinutasRJGSeguimientotodosExport;
use Maatwebsite\Excel\Facades\Excel;
use Image;
use Input;
use Storage;

class formulariosController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
     public function index()
    {   
        
        
        $timezone = new \DateTimeZone('America/Mexico_City');
        $date = new \DateTime();
        $date->setTimeZone($timezone); 
        $fecha_actual=$date->format('Y-m-d');
        
         
            $existe_registro= DB::table('reportes')
             ->where("reportes.user_registro",\Auth::user()->id)
                   ->where("reportes.fecha",$fecha_actual)
                   ->first();
           
               
    }
    
    public function reporte(){

       $mis_cuadrantes= \App\catCuadrantes::select('cat_cuadrantes.id','cat_cuadrantes.cuadrante')
                        ->join('users','users.name','=','cat_cuadrantes.ct')
                        ->where('users.id',\Auth::user()->id)
                        ->get();

        
        return view('reportes.cuestionario_reportes',compact('mis_cuadrantes'));
       
       
    }
    
    
    
  
    public function regiones(){

       $mis_regiones= \App\catDelegaciones::select('cat_delegaciones.delegacion','cat_delegaciones.region')
                        ->join('cat_coord_territorials','cat_coord_territorials.id_alcaldia','=','cat_delegaciones.ct')
                        ->join('users','users.name','=','cat_delegaciones.ct')
                        ->where('users.id',\Auth::user()->id)
                        ->get();

        
        return view('reportes.cuestionario_reportes',compact('mis_regiones'));
       

       
    }

    public function save_cuestionario_reportes(Request $request){
        
        //$reportes =$request->except('_token');
        
        //$reportes['user_registro']=\Auth::user()->id;
        
        //\App\reporte::create($reportes);
        
         // $mensaje = array('mensaje'=>'Registro  Éxitoso!', 'color'=> 'success');
          //return Redirect::to('/reporte')->with('mensaje', $mensaje);
        


        if($request['archivo']!=null){
        //$extension_archivo = $request['archivo']->getClientOriginalExtension(); // getting image extension
        $jpg_nombre = rand(11111,99999).'.jpg'; // renameing image
        //$pdf_nombre = rand(11111,99999).'.pdf'; 
        $destinationPath = 'uploads/';//
        }else{
        $jpg_nombre=null;
        //$pdf_nombre=null;

        }
        /*fin existe el documento*/
             
               /*$inserto = \App\reporte::create([ 

                 'user_registro' =>\Auth::user()->id,
                 'fecha' => $request['fecha'],
                 'hora_i' => $request['hora_i'],
                 'hora_f' => $request['hora_f'],
                 'tipo_documento' => $request['tipo_documento'],
                 'asunto' => $request['asunto'],
                 'domicilio' => $request['domicilio'],
                 'colonia' => $request['colonia'],
                 'descripcion_hecho' => $request['descripcion_hecho'],
                 'hubo_acuerdos' => $request['hubo_acuerdos'],
                 'descripcion_acuerdos' => $request['descripcion_acuerdos'],
                 'observaciones' => $request['observaciones'],
                 'archivo_imagen' => $jpg_nombre,
                 'archivo' => $pdf_nombre
               ]);*/



        
        //GUARDAR ARCHIVO SI EXISTE  
        $destinationPath = 'uploads/';     
        if($request['archivo']!=null){
            $request['archivo']->move($destinationPath,$jpg_nombre);
        }
               
              
                
         

       
if($request['archivos']!=null){
        //$extension_archivo = $request['archivo']->getClientOriginalExtension(); // getting image extension
        //$jpg_nombre = rand(11111,99999).'.jpg'; // renameing image
        $pdf_nombre = rand(11111,99999).'.pdf'; 
        $destinationPath = 'uploads/';//
        }else{
        //$jpg_nombre=null;
        $pdf_nombre=null;

        }
        /*fin existe el documento*/
             
               $inserto = \App\reporte::create([ 

                 'user_registro' =>\Auth::user()->id,
                 'fecha' => $request['fecha'],
                 'hora_i' => $request['hora_i'],
                 'hora_f' => $request['hora_f'],
                 'tipo_documento' => $request['tipo_documento'],
                 'asunto' => $request['asunto'],
                 'domicilio' => $request['domicilio'],
                 'colonia' => $request['colonia'],
                 'descripcion_hecho' => $request['descripcion_hecho'],
                 'hubo_acuerdos' => $request['hubo_acuerdos'],
                 'descripcion_acuerdos' => $request['descripcion_acuerdos'],
                 'observaciones' => $request['observaciones'],
                 'archivo_imagen' => $jpg_nombre,
                 'archivo' => $pdf_nombre
               ]);



        
        //GUARDAR ARCHIVO SI EXISTE  
        $destinationPath = 'uploads/';     
        if($request['archivos']!=null){
            $request['archivos']->move($destinationPath,$pdf_nombre);
        }
               
               
                  $mensaje = array('mensaje'=>'Registro  Éxitoso!', 'color'=> 'success');
        return Redirect::to('/reporte')->with('mensaje', $mensaje);

    }


    public function view_listado_reportes()
    {   
      

         $reportes = \App\reporte::select("reportes.*","cat_delegaciones.delegacion","cat_delegaciones.region","cat_coord_territorials.ct2","cat_coord_territorials.sector","cat_cuadrantes.cuadrante")
                    ->leftjoin('users','users.id','=','reportes.user_registro',"cat_coord_territorials.ct2")
                    ->leftjoin('cat_coord_territorials','cat_coord_territorials.ct2','=','users.name')
                     ->leftjoin('cat_delegaciones','cat_delegaciones.id','=','cat_coord_territorials.id_alcaldia')
                     ->leftjoin('cat_cuadrantes','cat_cuadrantes.id','=','reportes.id_cuadrante')
                     //->leftjoin('cat_cuadrantes','cat_cuadrantes.ct','=','cat_coord_territorials.ct2')
                    ->where('reportes.user_registro',\Auth::user()->id)
                    ->get();

         // dd($consultas );
      // return json_encode($consultas); 
      return view('consulta_reportes',compact('reportes'));
    }

    
    public function excel_reportes()

    {
               
        return Excel::download (new  ReportesExport, 'REPORTE DE TARJETAS RJG.xlsx');
              
    }

//////////////////////////////////////////////TRACING/////////////////////////////////////////////////

     public function tracingrjg(){

       $mis_cuadrantes= \App\catCuadrantes::select('cat_cuadrantes.id','cat_cuadrantes.cuadrante')
                        ->join('users','users.name','=','cat_cuadrantes.ct')
                        ->where('users.id',\Auth::user()->id)
                        ->get();

        
        return view('seguimientorjg.cuestionario_seguimientorjg',compact('mis_cuadrantes'));
       
       
    }
    

   
     
      public function regioness(){

       $mis_regiones= \App\catDelegaciones::select('cat_delegaciones.delegacion','cat_delegaciones.region')
                        ->join('cat_coord_territorials','cat_coord_territorials.id_alcaldia','=','cat_delegaciones.ct')
                        ->join('users','users.name','=','cat_delegaciones.ct')
                        ->where('users.id',\Auth::user()->id)
                        ->get();

        
        return view('seguimientorjg.cuestionario_seguimientorjg',compact('mis_regiones'));
       

       
    }



        public function save_cuestionario_tracing(Request $request){
        
        //$reportes =$request->except('_token');
        
        //$reportes['user_registro']=\Auth::user()->id;
        
        //\App\reporte::create($reportes);
        
         // $mensaje = array('mensaje'=>'Registro  Éxitoso!', 'color'=> 'success');
          //return Redirect::to('/reporte')->with('mensaje', $mensaje);
        


        if($request['archivo']!=null){
        //$extension_archivo = $request['archivo']->getClientOriginalExtension(); // getting image extension
        $jpg_nombre = rand(11111,99999).'.jpg'; // renameing image
        //$pdf_nombre = rand(11111,99999).'.pdf'; 
        $destinationPath = 'tracing/';//
        }else{
        $jpg_nombre=null;
        //$pdf_nombre=null;

        }
        /*fin existe el documento*/
             
               /*$inserto = \App\reporte::create([ 

                 'user_registro' =>\Auth::user()->id,
                 'fecha' => $request['fecha'],
                 'hora_i' => $request['hora_i'],
                 'hora_f' => $request['hora_f'],
                 'tipo_documento' => $request['tipo_documento'],
                 'asunto' => $request['asunto'],
                 'domicilio' => $request['domicilio'],
                 'colonia' => $request['colonia'],
                 'descripcion_hecho' => $request['descripcion_hecho'],
                 'hubo_acuerdos' => $request['hubo_acuerdos'],
                 'descripcion_acuerdos' => $request['descripcion_acuerdos'],
                 'observaciones' => $request['observaciones'],
                 'archivo_imagen' => $jpg_nombre,
                 'archivo' => $pdf_nombre
               ]);*/



        
        //GUARDAR ARCHIVO SI EXISTE  
        $destinationPath = 'tracing/';     
        if($request['archivo']!=null){
            $request['archivo']->move($destinationPath,$jpg_nombre);
        }
               
              
                
         

       
        if($request['archivos']!=null){
        //$extension_archivo = $request['archivo']->getClientOriginalExtension(); // getting image extension
        //$jpg_nombre = rand(11111,99999).'.jpg'; // renameing image
        $pdf_nombre = rand(11111,99999).'.pdf'; 
        $destinationPath = 'tracing/';//
        }else{
        //$jpg_nombre=null;
        $pdf_nombre=null;

        }
        /*fin existe el documento*/
             
               $inserto = \App\tracing::create([ 

                 'user_registro' =>\Auth::user()->id,
                 'fecha' => $request['fecha'],
                 'hora_i' => $request['hora_i'],
                 'numero' => $request['numero'],
                 'resolucion' => $request['resolucion'],
                 'archivo_imagen' => $jpg_nombre,
                 'archivo' => $pdf_nombre
               ]);



        
        //GUARDAR ARCHIVO SI EXISTE  
        $destinationPath = 'tracing/';     
        if($request['archivos']!=null){
            $request['archivos']->move($destinationPath,$pdf_nombre);
        }
               
               
                  $mensaje = array('mensaje'=>'Registro de Seguimiento Éxitoso!', 'color'=> 'success');
          return Redirect::to('/seguimientorjg')->with('mensaje', $mensaje);

    }

   


          public function view_listado_seguimiento()
        {   
      

         $seguimientos = \App\tracing::select("tracings.*","cat_delegaciones.delegacion","cat_delegaciones.region","cat_coord_territorials.ct2","cat_coord_territorials.sector","cat_cuadrantes.cuadrante")
                    ->leftjoin('users','users.id','=','tracings.user_registro',"cat_coord_territorials.ct2")
                    ->leftjoin('cat_coord_territorials','cat_coord_territorials.ct2','=','users.name')
                     ->leftjoin('cat_delegaciones','cat_delegaciones.id','=','cat_coord_territorials.id_alcaldia')
                     ->leftjoin('cat_cuadrantes','cat_cuadrantes.id','=','tracings.id_cuadrante')
                     //->leftjoin('cat_cuadrantes','cat_cuadrantes.ct','=','cat_coord_territorials.ct2')
                    ->where('tracings.user_registro',\Auth::user()->id)
                    ->get();

         // dd($consultas );
      // return json_encode($consultas); 
          return view('consulta_seguimiento',compact('seguimientos'));
         }

    
          public function excel_seguimiento()

        {
               
           return Excel::download (new  SeguimientoExport, 'REPORTE DE SEGUIMIENTO DE TARJETAS RJG.xlsx');
              
        }

/////////////////////////////////MINUTAS//////////////////////////////


         public function minutas(){


         $mis_cuadrantes= \App\catCuadrantes::select('cat_cuadrantes.id','cat_cuadrantes.cuadrante')
                        ->join('users','users.name','=','cat_cuadrantes.ct')
                        ->where('users.id',\Auth::user()->id)
                        ->get();

        
         return view('minutas.cuestionario_minutas',compact('mis_cuadrantes'));
       

       
    }
    
  
        public function regionets(){

         $mis_regiones= \App\catDelegaciones::select('cat_delegaciones.delegacion','cat_delegaciones.region')
                        ->join('cat_coord_territorials','cat_coord_territorials.id_alcaldia','=','cat_delegaciones.ct')
                        ->join('users','users.name','=','cat_delegaciones.ct')
                        ->where('users.id',\Auth::user()->id)
                        ->get();

        
        return view('minutas.cuestionario_minutas',compact('mis_regiones'));
       

       
    }

         public function save_cuestionario_minutas(Request $request){
        
        $minutasrjg =$request->except('_token');
        
        $minutasrjg['user_registro']=\Auth::user()->id;
        
        \App\minutas::create($minutasrjg);
        
          $mensaje = array('mensaje'=>'Registro  Éxitoso!', 'color'=> 'success');
          return Redirect::to('/minutasrjg')->with('mensaje', $mensaje);
        
    }
    
         public function excel_minutas(){
        
        
         return Excel::download(new  MinutasExport, 'REPORTE DE MINUTAS RJG.xlsx');
      
        
    }
    


    


        public function view_listado_minutas()
          {   
       /* $consultas = \App\tbPreguntas::select("tb_preguntas.*","cat_coord_territorials.ct2","cat_coord_territorials.sector","cat_delegaciones.delegacion")
        //,"cat_cuadrantes.ct","cat_cuadrantes.cuadrante","cat_delegaciones.delegacion","cat_delegaciones.region"
                    ->leftjoin('users','users.id','=','tb_preguntas.user_registro') 
                    ->leftjoin('cat_coord_territorials','cat_coord_territorials.ct2','=','users.name')
                   // ->leftjoin('cat_cuadrantes','cat_cuadrantes.cuadrante','=','users.name')
                    ->leftjoin('cat_delegaciones','cat_delegaciones.delegacion','=','users.name')
                   ->where('tb_preguntas.user_registro',\Auth::user()->id)
                   ->get();*/

         $minutasrjg = \App\minutas::select("minutas.*","cat_delegaciones.delegacion","cat_delegaciones.region","cat_coord_territorials.ct2","cat_coord_territorials.sector","cat_cuadrantes.cuadrante")
                    ->leftjoin('users','users.id','=','minutas.user_registro',"cat_coord_territorials.ct2")
                    ->leftjoin('cat_coord_territorials','cat_coord_territorials.ct2','=','users.name')
                     ->leftjoin('cat_delegaciones','cat_delegaciones.id','=','cat_coord_territorials.id_alcaldia')
                     ->leftjoin('cat_cuadrantes','cat_cuadrantes.id','=','minutas.id_cuadrante')
                     //->leftjoin('cat_cuadrantes','cat_cuadrantes.ct','=','cat_coord_territorials.ct2')
                    ->where('minutas.user_registro',\Auth::user()->id)
                    ->get();

         // dd($consultas );
      // return json_encode($consultas); 
      return view('consulta_minutas',compact('minutasrjg'));
    }

//////////////////////////////////SEGUIMIENTO DE MINUTAS//////////////////////////////////////



  public function seguimiento_minutas(){


         $mis_cuadrantes= \App\catCuadrantes::select('cat_cuadrantes.id','cat_cuadrantes.cuadrante')
                        ->join('users','users.name','=','cat_cuadrantes.ct')
                        ->where('users.id',\Auth::user()->id)
                        ->get();

        
         return view('seguimientominutas.cuestionario_seguimientomin',compact('mis_cuadrantes'));
       

       
    }
    
  
        public function regionetss(){

         $mis_regiones= \App\catDelegaciones::select('cat_delegaciones.delegacion','cat_delegaciones.region')
                        ->join('cat_coord_territorials','cat_coord_territorials.id_alcaldia','=','cat_delegaciones.ct')
                        ->join('users','users.name','=','cat_delegaciones.ct')
                        ->where('users.id',\Auth::user()->id)
                        ->get();

        
        return view('seguimientominutas.cuestionario_seguimientomin',compact('mis_regiones'));
       

       
    }

         public function save_cuestionario_seguimiento_minutas(Request $request){
        
        $seguimientominutasrjg =$request->except('_token');
        
        $seguimientominutasrjg['user_registro']=\Auth::user()->id;
        
        \App\seguimientominutas::create($seguimientominutasrjg);
        
          $mensaje = array('mensaje'=>'Registro  Éxitoso!', 'color'=> 'success');
          return Redirect::to('/seguimientominutas')->with('mensaje', $mensaje);
        
    }
    
         public function excel_seguimiento_minutas(){
        
        
         return Excel::download(new  SeguimientoMinutasExport, 'REPORTE DE SEGUIMIENTO DE MINUTAS RJG.xlsx');
      
        
    }
    


    


        public function view_listado_seguimiento_minutas()
          {   
       

         $seguimientominutasrjgs = \App\seguimientominutas::select("seguimientominutas.*","cat_delegaciones.delegacion","cat_delegaciones.region","cat_coord_territorials.ct2","cat_coord_territorials.sector","cat_cuadrantes.cuadrante")
                    ->leftjoin('users','users.id','=','seguimientominutas.user_registro',"cat_coord_territorials.ct2")
                    ->leftjoin('cat_coord_territorials','cat_coord_territorials.ct2','=','users.name')
                     ->leftjoin('cat_delegaciones','cat_delegaciones.id','=','cat_coord_territorials.id_alcaldia')
                     ->leftjoin('cat_cuadrantes','cat_cuadrantes.id','=','seguimientominutas.id_cuadrante')
                     //->leftjoin('cat_cuadrantes','cat_cuadrantes.ct','=','cat_coord_territorials.ct2')
                    ->where('seguimientominutas.user_registro',\Auth::user()->id)
                    ->get();

         // dd($consultas );
      // return json_encode($consultas); 
      return view('consulta_seguimientomin',compact('seguimientominutasrjgs'));
    }

    

///////////////////////////////////REPORTES DE ALCALDIAS POR USUARIOS DE ALCALDIAS//////////////////////////////////////

 public function reporte_general()
    {   
        
      return view('excel.cuestionario_reportes');
    }

    
    public function reporterjg_general(){
        
        
         return Excel::download(new  ReportesRJGExport, 'REPORTE GENERAL RJG.xlsx');//OK
      
        
    }

    public function reporterjg_seguimiento_general(){
        
        
         return Excel::download(new  ReportesRJGSeguimientoExport, 'REPORTE GENERAL SEGUIMIENTO RJG.xlsx');//OK
      
        
    }


    public function minutas_general(){
        
        
         return Excel::download(new  MinutasRJGExport, 'REPORTE GENERAL MINUTAS RJG.xlsx');//OK
      
        
    }

    public function minutas_seguimiento_general(){
        
        
         return Excel::download(new  MinutasRJGSeguimientoExport, 'REPORTE GENERAL MINUTAS SEGUIMIENTO RJG.xlsx');//OK
      
        
    }

    /////////////////////////////////////todosssssssssssREPORTES TODAS LAS C.T/////////////////////////

     public function reporte_general_todos()
          {

      return view('excel_todo.cuestionario_reportes_todo');
    }

    

    public function reporterjg_general_todos(){
        
        
         return Excel::download(new  ReportesRJGtodosExport(), 'REPORTE GENERAL C.T.xlsx');
      
        
    }

    public function reporterjg_seguimiento_general_todos(){
                
         return Excel::download(new  ReportesRJGSeguimientotodosExport, 'REPORTE GENERAL SEGUIMIENTO C.T RJG.xlsx');//
      
        
    }


    public function minutas_general_todos(){
        
        
         return Excel::download(new  MinutasRJGtodosExport, 'REPORTE GENERAL MINUTAS C.T RJG.xlsx');//
      
        
    }

    public function minutas_seguimiento_general_todos(){
        
        
         return Excel::download(new  MinutasRJGSeguimientotodosExport, 'REPORTE GENERAL MINUTAS SEGUIMIENTO C.T RJG.xlsx');
      
        
    }
   

   public function usuario_archivos()
    {   
         


                $tipo_user_alc=\Auth::user()->delegacion_user;
               if($tipo_user_alc==0) {

                //GENERAL 

                //REPORTES
                $documentos = DB::table('reportes')->select('reportes.*','users.name as coord')
                                                    ->join('users','users.id','=','reportes.user_registro')
                                                    ->get(); 
                //
                $documentos2 = DB::table('tracings')->select('tracings.*','users.name as coord')
                                                   ->join('users','users.id','=','tracings.user_registro')
                                                   ->get();

               }else{

                //ALCALDIA   
                $documentos = DB::table('reportes')->select('reportes.*','users.name as coord') 
                            ->join('users','users.id','=','reportes.user_registro')
                            ->where('users.delegacion_user',$tipo_user_alc)
                           /* ->whereNotNull('reportes.archivo_imagen')
                            ->orwhereNotNull('reportes.archivo')*/
                             ->get();



                $documentos2 = DB::table('tracings')->select('tracings.*','users.name as coord')
                            ->join('users','users.id','=','tracings.user_registro')
                            ->where('users.delegacion_user',$tipo_user_alc)
                             /* ->whereNotNull('tracings.archivo_imagen')
                            ->orwhereNotNull('tracings.archivo')*/
                             ->get();

               } 
              
          
             return view('usuario_archivos',compact('documentos','documentos2'));
    }
    
    








}
