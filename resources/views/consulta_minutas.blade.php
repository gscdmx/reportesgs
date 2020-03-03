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
                    <!--<header> 
            <h1 class="h3 display">Forms            </h1>
          </header>-->
          <div class="row">
         


<div class="col-lg-12">
  <div class="card">
    <div class="card-header d-flex align-items-center">
      <h4>CGGSCPJ CDMX</h4>
    </div>
    <div class="card-header d-flex align-items-center">
      <h4>MINUTAS DE RJG EN LA CDMX</h4>
    </div>
    <div class="card-body">
      <form class="form-horizontal" method="POST" action="{{ url('/getlistadominutas') }}">

      {{ csrf_field() }}


      @if( Session::has('mensaje') )
                   <div class="alert alert-{{ Session::get('mensaje')['color'] }} alert-dismissable">
                       <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                       {{ Session::get('mensaje')['mensaje'] }}
                   </div>
      @endif

                      

<div class="col-sm-4 offset-sm-2">
           
            <a href="{{ url('/getexcel_minutas') }}" class="btn btn-primary">Excel Minutas RJG</a>
            
            
            
</div>     

        

        <div class="col-lg-20">
          <div class="card">
            <div class="card-header">
              <h4>Listado de Minutas de RJG </h4>
               </div>
            
                               
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="tabla_de_minutas">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>FECHA DEL GABINETE</th>
                      <th>HORA DE INICIO</th>
                      <th>HORA DE CIERRE</th>
                      <th>COODINACIÓN TERRITORIAL</th>
                      <th>TIPO DE DOCUMENTO</th>
                      <th>ESPECIFIQUE OTRO</th>
                      <th>LUGAR EN EL QUE SE LLEVÓ A CABO</th>
                      <th>REPORTE DE INCIDENCIA</th>
                      <th>OTROS INFORMES</th>
                      <th>ACUERDOS</th>
                      <th>FECHA REAL DE CAPTURA</th>                                                                                                    
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($minutasrjg as $minutasrj)
                    
                    <tr>
                      
                      <td>{{$minutasrj->id}}</td>
                      <td>{{$minutasrj->fecha}}</td>
                      <td>{{$minutasrj->hora_i}}</td>
                      <td>{{$minutasrj->hora_f}}</td>
                      <td>{{$minutasrj->ct2}} {{$minutasrj->sector}}</td>
                      <td>{{$minutasrj->tipo_documento}}</td>
                      <td>{{$minutasrj->otro_documento}}</td>
                      <td>{{$minutasrj->lugar}}</td>
                      <td>{{$minutasrj->reporte}}</td>
                      <td>{{$minutasrj->otro_informe}}</td>
                      <td>{{$minutasrj->acuerdos}}</td>
                      <td>{{$minutasrj->created_at}}</td>                                                                                

                    </tr>
                    @endforeach   
                 <tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </form>
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
        <h5 class="modal-title" id="exampleModalLabel">Foto: Tarjeta CDMX</h5>
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


@endsection

@section('js')  
 
@endsection

@section('customjs')


<script    type="text/javascript">
  

  $( ".obten_imagen" ).click(function() {

    
     var imagen_nombres = $(this).attr('data-imagen');

     var ruta ="{{url('minutas')}}"+"/"+imagen_nombres

     $("#imagen_dinamica").attr('src',ruta);


  //alert( ruta);
});


</script>





<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/r-2.2.2/sl-1.3.0/datatables.min.js"></script>

<script type="text/javascript">
  

  $(document).ready( function () {
    $('#tabla_de_minutas').DataTable();
} );

</script>




@endsection


