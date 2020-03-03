@extends('template.header')

@section('content')

<!--<link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"
   integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
   crossorigin=""/>

<style>
      #map {
        height: 100%;
       /* z-index: -1000;*/
      }
</style>-->
  <section class="forms">
        <div class="container-fluid">
          
          <!--<header> 
            <h1 class="h3 display">Forms            </h1>
          </header>-->
          <div class="row"> 
<div class="col-lg-12">
  <div class="card">
    <div class="card-header d-flex align-items-center">
      <h4>CGGSCyPJ CDMX </h4>
    </div>
    <div class="card-header d-flex align-items-center">
      <h4>MINUTAS DE RJG</h4>
      
    </div>
    <div class="card-body">
      <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="{{ url('/guardar_cuestionario_minutas') }}">




         <!-- <div id="map"></div>-->
         




      {{ csrf_field() }}

      @if( Session::has('mensaje') )
                   <div class="alert alert-{{ Session::get('mensaje')['color'] }} alert-dismissable">
                       <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                       {{ Session::get('mensaje')['mensaje'] }}
                   </div>
      @endif



 
      <!--<div class="form-group row">
        <div class="col-sm-6 offset-sm-6">
          <button type="button" id="ubicarme" class="btn btn-primary"> UBICARME </button>
        </div>
      </div>-->





        <div class="line"></div>
      <div class="form-group row">
        <label class="col-sm-2 form-control-label">Fecha del Gabinete:</label>
        <div class="col-sm-2">
          <!--<input type="text" class="form-control">-->
          <input type="date" id="fecha" name="fecha" class="form-control" required></input>
           @if ($errors->has('fecha')) <p  style="color: red">{{ $errors->first('fecha') }}</p> @endif 
        </div>

        <label class="col-sm-2 form-control-label">Hora de Inicio:</label>
        <div class="col-sm-2">
          <!--<input type="text" class="form-control">-->
          <input type="time" id="hora_i" name="hora_i" class="form-control" required></input>
           @if ($errors->has('hora_i')) <p  style="color: red">{{ $errors->first('hora_i') }}</p> @endif
        </div>

         <label class="col-sm-2 form-control-label">Hora de Cierre:</label>
        <div class="col-sm-2">
          <!--<input type="text" class="form-control">-->
         <input type="time" id="hora_f" name="hora_f" class="form-control" required></input>
           @if ($errors->has('hora_f')) <p  style="color: red">{{ $errors->first('hora_f') }}</p> @endif
        </div>


      </div>


       
         
          <div class="line"></div>
           <div class="form-group row">
             <label class="col-sm-3 form-control-label">1. TIPO DE DOCUMENTO:</label>
             <div class="col-sm-9 mb-3">
              <select name="tipo_documento" id="tipo_documento" class="form-control" required>
              <option value="">Selecciona...</option>
              <option value="Minuta Gabinete Matutino">Minuta Gabinete Matutino</option>
              <option value="Minuta Gabinete Vespertino">Minuta Gabinete Vespertino</option>
              <option value="Minuta Reunión Sendero Seguro">Minuta Reunión Sendero Seguro</option>
              <option value="Minuta Reunion Semanal RJG">Minuta Reunion Semanal RJG</option>
              <option value="Reporte de Trabajo">Reporte de Trabajo</option>
              <option value="Coordinado con PDI">Coordinado con PDI</option>
              <option value="otro">Otro:</option>
            </select>
            
             @if ($errors->has('tipo_documento')) <p  style="color: red">{{ $errors->first('tipo_documento') }}</p> @endif 
            </div>
        
           </div>
             
             <div  style="display:none;" id="show_otro">
        
              <div class="form-group row">
              <label class="col-sm-3 form-control-label" id="texto_otros"></label>
              <div class="col-sm-9 mb-3">
              <textarea class="form-control" id="otro_documento" name="otro_documento" ></textarea>
            
               @if ($errors->has('otro_documento')) <p  style="color: red">{{ $errors->first('otro_documento') }}</p> @endif 
              </div>
        
              </div>
        
             </div>

      
       <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">2. Lugar en que se llevó acabo:</label>
          <div class="col-sm-9 mb-3">
           <input type="text" class="form-control" id="lugar" name="lugar" placeholder="Escribe el lugar"    required></input>
            
               @if ($errors->has('lugar')) <p  style="color: red">{{ $errors->first('lugar') }}</p> @endif 
                  </div>
        
             </div>
        

          <div class="line"></div>
             <div class="form-group row">
               <label class="col-sm-3 form-control-label">3. Reporte de Incidencia:</label>
                   <div class="col-sm-9 mb-3">
                   <input type="text" class="form-control" id="reporte" name="reporte" placeholder="Reporte de Incidencia" required></input>
            
                  @if ($errors->has('reporte')) <p  style="color: red">{{ $errors->first('reporte') }}</p> @endif 
                  </div>
        
             </div>

         

         <div class="line"></div>
             <div class="form-group row">
               <label class="col-sm-3 form-control-label">4. Otros informes:</label>
                   <div class="col-sm-9 mb-3">
                   <input type="text" class="form-control" id="otro_informe" name="otro_informe" placeholder="Escribe otros informes"   ></input>
            
                  @if ($errors->has('otro_informe')) <p  style="color: red">{{ $errors->first('otro_informe') }}</p> @endif 
                  </div>
        
             </div>


         <div class="line"></div>
             <div class="form-group row">
               <label class="col-sm-3 form-control-label">5. Acuerdos:</label>
                   <div class="col-sm-9 mb-3">
                   <input type="text" class="form-control" id="acuerdos" name="acuerdos" placeholder="acuerdos"  required></input>
            
                  @if ($errors->has('acuerdos')) <p  style="color: red">{{ $errors->first('acuerdos') }}</p> @endif 
                  </div>
        
             </div>
    

    
       

        <div class="line"></div>
        <div class="form-group row">
          <div class="col-sm-6 offset-sm-6">
            <button type="submit" class="btn btn-primary"> Registrar Minuta </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

 </div>
          </div>





  </section>





@endsection




@section('js')  
 
@endsection





@section('customjs')


<script type="text/javascript">



 $('#tipo_documento').change(function(evento){
         valor = $(this).val();



         if (valor=="otro") {
          $('#show_otro').show();
          $('#texto_otros').text('Especifique otro:');
          
         }else if(valor=="no"){
           $('#show_otro').show();
           //$('#texto_otros').text('Escribe no');

         }else{

          $('#show_otro').hide();
            $('#show_otro').hide();

         }

});

</script>

@endsection

