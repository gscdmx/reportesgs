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
      <h4>REPORTES DE TODAS LAS COORDINACIONES TERRITORIALES RJG</h4>
      
    </div>
    <div class="card-body">
      <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="{{ url('/guardar_cuestionario_reportes_todos') }}">




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
        <label class="col-sm-2 form-control-label">Fecha de Evento:</label>
        <div class="col-sm-2">
          <!--<input type="text" class="form-control">-->
          <input type="date" id="fecha" name="fecha" class="form-control" required></input>
           @if ($errors->has('fecha')) <p  style="color: red">{{ $errors->first('fecha') }}</p> @endif 
        </div>

        <label class="col-sm-2 form-control-label">Hora de Evento:</label>
        <div class="col-sm-2">
          <!--<input type="text" class="form-control">-->
          <input type="time" id="hora_i" name="hora_i" class="form-control" required></input>
           @if ($errors->has('hora_i')) <p  style="color: red">{{ $errors->first('hora_i') }}</p> @endif
        </div>

         <label class="col-sm-2 form-control-label">Hora de Término de Evento:</label>
        <div class="col-sm-2">
          <!--<input type="text" class="form-control">-->
         <input type="time" id="hora_f" name="hora_f" class="form-control" required></input>
           @if ($errors->has('hora_f')) <p  style="color: red">{{ $errors->first('hora_f') }}</p> @endif
        </div>


      </div>






 <!--<div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">1.- Nombre del Ciudadano Entrevistado:</label>
          <div class="col-sm-9 mb-3">
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre del vecino"required></input>
            
               @if ($errors->has('nombre')) <p  style="color: red">{{ $errors->first('nombre') }}</p> @endif 
                  </div>
        
             </div>-->



 <!--<div class="line"></div>
         <div class="form-group row">
          <label class="col-sm-3 form-control-label">2.- Télefono:</label>
          <div class="col-sm-9 mb-3">
            <input type="text" class="form-control" id="telefono" name="telefono"  placeholder="telefono" required></input>
            
               @if ($errors->has('telefono')) <p  style="color: red">{{ $errors->first('telefono') }}</p> @endif 
                  </div>
        
             </div>-->


 <!--<div class="line"></div>
       <div class="form-group row">
          <label class="col-sm-3 form-control-label">3.- Calle:</label>
          <div class="col-sm-9 mb-3">
           <input type="text" class="form-control" id="calle" name="calle" placeholder="calle"    required></input>
            
               @if ($errors->has('calle')) <p  style="color: red">{{ $errors->first('calle') }}</p> @endif 
                  </div>
        
             </div>-->

          
         <!--<div class="line"></div>
          <div class="form-group row">
          <label class="col-sm-3 form-control-label">4.- Número:</label>
          <div class="col-sm-9 mb-3">
            <input type="text" class="form-control" id="numero" name="numero"    placeholder="número"      required></input>
            
               @if ($errors->has('numero')) <p  style="color: red">{{ $errors->first('numero') }}</p> @endif 
                  </div>
        
             </div>-->

           
            <!--<div class="line"></div>
             <div class="form-group row">
               <label class="col-sm-3 form-control-label">5.- Colonia o Barrio:</label>
               <div class="col-sm-9 mb-3">
               <input type="text" class="form-control" id="colonia" name="colonia"   placeholder="colonia"   required></input>
            
               @if ($errors->has('colonia')) <p  style="color: red">{{ $errors->first('colonia') }}</p> @endif 
                  </div>
        
             </div>-->



     <!--<div class="form-group row">
        <label class="col-sm-3 form-control-label">6.- Cuadrante: </label>
        <div class="col-sm-9 mb-3">
          <select name="id_cuadrante" id="id_cuadrante" class="form-control" required>
            <option value="">Selecciona...</option>
            @foreach($mis_cuadrantes as $mi_cuadrante)
            <option value="{{$mi_cuadrante->id}}">{{$mi_cuadrante->cuadrante}}</option>
            @endforeach
          
          </select>
          
           @if ($errors->has('id_cuadrante')) <p  style="color: red">{{ $errors->first('id_cuadrante') }}</p> @endif 
        </div>
      
      </div> -->


     
      

        <!--<div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">7.- Nombre Representante de Jefatura de Gobierno:</label>
          <div class="col-sm-9 mb-3">
           <input type="text" class="form-control" id="nombre_rjg" name="nombre_rjg" placeholder="Nombre RJG"    required></input>
            
               @if ($errors->has('nombre_rjg')) <p  style="color: red">{{ $errors->first('nombre_rjg') }}</p> @endif 
                  </div>
        
             </div>-->
  
       
         
          <div class="line"></div>
           <div class="form-group row">
             <label class="col-sm-3 form-control-label">1. TIPO DE TARJETA:</label>
             <div class="col-sm-9 mb-3">
              <select name="tipo_documento" id="tipo_documento" class="form-control" required>
              <option value="">Selecciona...</option>
              <option value="Tarjeta Informativa">Tarjeta Informativa</option>
              <option value="Tarjeta Relevante">Tarjeta Relevante</option>
              <option value="Tarjeta Urgente">Tarjeta Urgente</option>
              <option value="Tarjeta Confidencial">Tarjeta Confidencial</option>
            </select>
            
             @if ($errors->has('tipo_documento')) <p  style="color: red">{{ $errors->first('tipo_documento') }}</p> @endif 
          </div>
        
        </div>


      
       <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">2. Asunto:</label>
          <div class="col-sm-9 mb-3">
           <input type="text" class="form-control" id="asunto" name="asunto" placeholder="Escribe el asunto"    required></input>
            
               @if ($errors->has('asunto')) <p  style="color: red">{{ $errors->first('asunto') }}</p> @endif 
                  </div>
        
             </div>
        

          <div class="line"></div>
             <div class="form-group row">
               <label class="col-sm-3 form-control-label">3. Domicilio:</label>
                   <div class="col-sm-9 mb-3">
                   <input type="text" class="form-control" id="domicilio" name="domicilio" placeholder="Sugerencia: Calle, Número" required></input>
            
                  @if ($errors->has('domicilio')) <p  style="color: red">{{ $errors->first('domicilio') }}</p> @endif 
                  </div>
        
             </div>

         

         <div class="line"></div>
             <div class="form-group row">
               <label class="col-sm-3 form-control-label">4. Colonia:</label>
                   <div class="col-sm-9 mb-3">
                   <input type="text" class="form-control" id="colonia" name="colonia" placeholder="Escribe Colonia"    required></input>
            
                  @if ($errors->has('colonia')) <p  style="color: red">{{ $errors->first('colonia') }}</p> @endif 
                  </div>
        
             </div>


         <div class="line"></div>
             <div class="form-group row">
               <label class="col-sm-3 form-control-label">5. Descripción de Hecho:</label>
                   <div class="col-sm-9 mb-3">
                   <input type="text" class="form-control" id="descripcion_hecho" name="descripcion_hecho" placeholder="Sugerencia: Escribe el qué, cómo, por qué y quién del asunto"  required></input>
            
                  @if ($errors->has('descripcion_hecho')) <p  style="color: red">{{ $errors->first('descripcion_hecho') }}</p> @endif 
                  </div>
        
             </div>
    

    <div class="form-group row">
          <label class="col-sm-3 form-control-label">6. ¿Hubo acuerdos?</label>
          <div class="col-sm-9 mb-3">
            <select name="hubo_acuerdos" id="hubo_acuerdos" class="form-control" required>
              <option value="">Selecciona...</option>
              <option value="si">SI</option>
              <option value="no">NO</option>
            </select>
            
             @if ($errors->has('hubo_acuerdos')) <p  style="color: red">{{ $errors->first('hubo_acuerdos') }}</p> @endif 
          </div>
        
        </div>
        
        <div  style="display:none;" id="show_acuerdo">
        
        <div class="form-group row">
          <label class="col-sm-3 form-control-label" id="texto_acuerdos"></label>
          <div class="col-sm-9 mb-3">
            <textarea class="form-control" id="descripcion_acuerdos" name="descripcion_acuerdos" ></textarea>
            
             @if ($errors->has('descripcion_acuerdos')) <p  style="color: red">{{ $errors->first('descripcion_acuerdos') }}</p> @endif 
          </div>
        
        </div>
        
        </div>


          <div class="line"></div>
            <div class="form-group row">
              <label class="col-sm-3 form-control-label">7. Observaciones:</label>
                <div class="col-sm-9 mb-3">
                   <input type="text" class="form-control" id="observaciones" name="observaciones"></input>
            
                       @if ($errors->has('observaciones')) <p  style="color: red">{{ $errors->first('observaciones') }}</p> @endif 
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
            <button type="submit" class="btn btn-primary"> Registrar </button>
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

