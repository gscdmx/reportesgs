@extends('template.header')

@section('content')

  <section class="forms">
        <div class="container-fluid">
          
         
          <div class="row"> 
<div class="col-lg-12">
  <div class="card">
    <div class="card-header d-flex align-items-center">
      <h4>CGGSCyPJ CDMX </h4>
    </div>
    <div class="card-header d-flex align-items-center">
      <h4>REPORTES DE TODAS LAS COORDINACIONES TERRITORIALES CDMX</h4>
      
    </div>
    <div class="card-body">
      <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="{{ url('/reportes_generales_todos') }}">





      {{ csrf_field() }}

      @if( Session::has('mensaje') )
                   <div class="alert alert-{{ Session::get('mensaje')['color'] }} alert-dismissable">
                       <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                       {{ Session::get('mensaje')['mensaje'] }}
                   </div>
      @endif

       
       <div class="col-sm-4 offset-sm-2">
           
            <a href="{{ url('/getexcel_reportes_reportesrjg_todos') }}" class="btn btn-primary">Excel Reportes C.T de RJG</a>
            
            
            
       </div> <br> <br>

       <div class="col-sm-4 offset-sm-2">
           
            <a href="{{ url('/getexcel_reportes_reportes_seguimiento_todos') }}" class="btn btn-primary">Excel Reportes de Seguimiento C.T RJG</a>
            
            
            
       </div> <br> <br>

       
        <div class="col-sm-4 offset-sm-2">
           
            <a href="{{ url('/getexcel_reportes_reportes_minutas_todos') }}" class="btn btn-primary">Excel Minutas C.T RJG</a>
                       
            
       </div> <br> <br>

       
        <div class="col-sm-4 offset-sm-2">
           
            <a href="{{ url('/getexcel_reportes_reportes_seguimiento_minutas_todos') }}" class="btn btn-primary">Excel Minutas de Seguimiento C.T RJG</a>
            
            
            
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

