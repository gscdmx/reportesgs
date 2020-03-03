@extends('template.header')

@section('content')

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/r-2.2.2/sl-1.3.0/datatables.min.css"/>

<style>
thead {color:green;}
tbody {color:blue;}
tfoot {color:red;}

table, th, td {
  border: 1px solid black;
}
</style>


  <section class="forms">
        <div class="container-fluid">
          <div class="row">
         


<div class="col-lg-12">
  <div class="card">
    <div class="card-header d-flex align-items-center">
      <h4>CGGSCPJ CDMX</h4>
    </div>
    <div class="card-header d-flex align-items-center">
      <h4>IMAGENES Y ARCHIVOS</h4>
    </div>
    <div class="card-body">
   

      @if( Session::has('mensaje') )
                   <div class="alert alert-{{ Session::get('mensaje')['color'] }} alert-dismissable">
                       <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                       {{ Session::get('mensaje')['mensaje'] }}
                   </div>
      @endif

                      

    

        

        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
              <h4>Listado de Reportes  </h4> 
            </div>         
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped datatable_files" id="tabla_de_archivos">
                  <thead>
                    <tr>
                      <th>CT</th>
                      <th>IMAGEN</th>
                      <th>PDF</th>                     
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($documentos as $documento)         
                    <tr>
                      <td>{{$documento->coord}}</td>
                       <td>
                        @if($documento->archivo_imagen==null || $documento->archivo_imagen=='')
                         SIN IMAGEN
                        @else
                          <button type="button" class="btn btn-primary obten_imagen" data-toggle="modal"  data-imagen="{{$documento->archivo_imagen}}" data-target="#modal_imagen_reporte">
                          {{$documento->archivo_imagen}}
                          </button>
                        @endif
                      </td>        
                      <td>
                        @if($documento->archivo==null || $documento->archivo=='')
                         SIN ARCHIVO
                        @else
                          <button type="button" class="btn btn-primary obten_doc" data-toggle="modal"  data-imagen="{{$documento->archivo}}" data-target="#modal_doc_reporte">
                         {{$documento->archivo}}
                          </button>
                           <a href="{{url('/uploads').'/'.$documento->archivo}}" class="btn btn-primary" download>Descargar</a>
                        @endif
                      </td>    
                    </tr>
                    @endforeach   
                   <tbody>
                </table>
              </div>
            </div>
          </div>
        </div>


        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
              <h4>Listado de Seguimiento de Reportes</h4>
            </div>         
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped datatable_files" id="tabla_de_archivos2">
                  <thead>
                    <tr>
                      <th>CT</th>
                      <th>IMAGEN</th>
                      <th>PDF</th>                     
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($documentos2 as $documento2)         
                    <tr>
                      <td>{{$documento2->coord}}</td>
                       <td>
                        @if($documento2->archivo_imagen==null || $documento2->archivo_imagen=='')
                         SIN IMAGEN
                        @else
                          <button type="button" class="btn btn-primary obten_imagen2" data-toggle="modal"  data-imagen="{{$documento2->archivo_imagen}}" data-target="#modal_imagen_reporte">
                          {{$documento2->archivo_imagen}}
                          </button>
                        @endif
                      </td>        
                      <td>
                        @if($documento2->archivo==null || $documento2->archivo=='')
                         SIN ARCHIVO
                        @else
                          <button type="button" class="btn btn-primary obten_doc2" data-toggle="modal"  data-imagen="{{$documento2->archivo}}" data-target="#modal_doc_reporte">
                         {{$documento2->archivo}}
                          </button>
                           <a href="{{url('/uploads').'/'.$documento2->archivo}}" class="btn btn-primary" download>Descargar</a>
                        @endif
                      </td>    
                    </tr>
                    @endforeach   
                   <tbody>
                </table>
              </div>
            </div>
          </div>
        </div>











     




    </div>
  </div>
</div>

 </div>
 </div>
  </section>
  






<!-- Modal -->
<div class="modal fade" id="modal_imagen_reporte" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Foto: Reportes CDMX</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
      <div style="width: 500px; height: 400px;">
      <img src="" id="imagen_dinamica"  style="width: 480px; height: 380px;"  >
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      
      </div>
    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="modal_doc_reporte" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">DOCUMENTO:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      

       <iframe id="prev_doc" src="" width="450" height="600"></iframe>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      
      </div>
    </div>
  </div>
</div>




@endsection

@section('js')  
 
@endsection

@section('customjs')

<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/r-2.2.2/sl-1.3.0/datatables.min.js"></script>
<script    type="text/javascript">
  
    $( ".obten_imagen" ).click(function() { 
         var imagen_nombres = $(this).attr('data-imagen');
         var ruta ="{{url('uploads')}}"+"/"+imagen_nombres;
         $("#imagen_dinamica").attr('src',ruta);
    });

    $( ".obten_doc" ).click(function() {
     var doc_nombre = $(this).attr('data-imagen');
     var ruta ="{{url('uploads')}}"+"/"+doc_nombre;
      $("#prev_doc").attr('src',ruta);
    });



      $( ".obten_imagen2" ).click(function() { 
       var imagen_nombres = $(this).attr('data-imagen');
       var ruta ="{{url('tracing')}}"+"/"+imagen_nombres;
       $("#imagen_dinamica").attr('src',ruta);
     });

    $( ".obten_doc2" ).click(function() {
     var doc_nombre = $(this).attr('data-imagen');
     var ruta ="{{url('tracing')}}"+"/"+doc_nombre;
      $("#prev_doc").attr('src',ruta);
    });



      $(document).ready( function () {
         $('.datatable_files').DataTable();
     });
</script>
@endsection
