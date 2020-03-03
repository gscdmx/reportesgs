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
      <h4>SEGUIMIENTO CGGSCyPJ CDMX </h4>
    </div>
    <div class="card-header d-flex align-items-center">
      <h4>SEGUIMIENTO DE TARJETAS RJG</h4>
      
    </div>
    <div class="card-body">
      <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="{{ url('/guardar_cuestionario_tracing') }}">




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
        
        <label class="col-sm-2 form-control-label">Fecha de Resolución:</label>
        <div class="col-sm-2">
          <!--<input type="text" class="form-control">-->
          <input type="date" id="fecha" name="fecha" class="form-control" required></input>
           @if ($errors->has('fecha')) <p  style="color: red">{{ $errors->first('fecha') }}</p> @endif 
        </div>

        <label class="col-sm-2 form-control-label">Hora de Resolución:</label>
        <div class="col-sm-2">
          <!--<input type="text" class="form-control">-->
          <input type="time" id="hora_i" name="hora_i" class="form-control" required></input>
           @if ($errors->has('hora_i')) <p  style="color: red">{{ $errors->first('hora_i') }}</p> @endif
        </div>

         


      </div>
      
      <div class="line"></div>

               
        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">1.- Deberá capturar el ID de REPORTE del Módulo correspondiente, sólo se admiten números:
          </label>
          <div class="col-sm-9 mb-3">
             <input type="number" class="form-control" id="numero" name="numero" placeholder="ID del módulo correspondiente" required></input>
            
             @if ($errors->has('numero')) <p  style="color: red">{{ $errors->first('numero') }}</p> @endif 
          </div>
        
        </div>




          <div class="line"></div>
             <div class="form-group row">
               <label class="col-sm-3 form-control-label">2.- Anote la Resolución del Acuerdo:</label>
                   <div class="col-sm-9 mb-3">
                   <input type="text" class="form-control" id="resolucion" name="resolucion" placeholder="Acuerdo" required></input>
            
                  @if ($errors->has('resolucion')) <p  style="color: red">{{ $errors->first('resolucion') }}</p> @endif 
                  </div>
        
             </div>

         
     


       <div class="line"></div>

          <div class="line"></div>
          <div class="form-group row">
          <label class="col-sm-2 form-control-label">Subir Foto:</label>
          <div class="col-sm-10 mb-3">
          <input type="file" name="archivo" accept="image/x-png,image/gif,image/jpeg" class="form-group row"  />

          </div>
          </div>
      
         <div class="line"></div>

          <div class="form-group row">
          <label class="col-sm-2 form-control-label">Subir documento PDF:</label>
          <div class="col-sm-10">
          <input type="file" id="archivos" name="archivos" accept="application/pdf"> 
          <!--este es el mensaje de validacion-->
          @if ($errors->has('archivo')) <p  style="color: red">{{ $errors->first('archivo') }}</p> @endif

         </div>
          </div>
       

        <div class="line"></div>
        <div class="form-group row">
          <div class="col-sm-6 offset-sm-6">
            <button type="submit" class="btn btn-primary"> Registrar</button>
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



 $('#hubo_acuerdos').change(function(evento){
         valor = $(this).val();



         if (valor=="si") {
          $('#show_acuerdo').show();
          $('#texto_acuerdos').text('Escribe el acuerdo:');
          
         }else if(valor=="no"){
           $('#show_acuerdo').show();
           //$('#texto_acuerdos').text('Escribe no');

         }else{

          $('#show_acuerdo').hide();
            $('#show_acuerdo').hide();

         }

});

</script>

@endsection

