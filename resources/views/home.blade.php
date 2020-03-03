@extends('template.header')

@section('content')

  <section class="forms">
        <div class="container-fluid">
          
          <!--<header> 
            <h1 class="h3 display">Forms            </h1>
          </header>-->
          <div class="row">
         
<div class="col-lg-12">
  <div class="card">
    <div class="card-header d-flex align-items-center">
      <h4>CGGSCyPJ CDMX</h4>
    </div>
    <div class="card-header d-flex align-items-center">
      <h4>REPORTES DE RJG PARA EL GABINETE DE SEGURIDAD CIUDADANA CDMX</h4>
      <!--<H4>Preguntas más frecuentes (AYUDAS)</H4>
         <a class="btn btn-primary" href="{{url('/uploads/GSCYPJ/preguntas.docx')}}" role="button">F A Q</a><br><br>-->
    </div>
    <div class="card-body">
      <form class="form-horizontal" method="POST" action="{{ url('/guardar_asistencia') }}">

      {{ csrf_field() }}




      @if( Session::has('mensaje') )
                   <div class="alert alert-{{ Session::get('mensaje')['color'] }} alert-dismissable">
                       <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                       {{ Session::get('mensaje')['mensaje'] }}
                   </div>
      @endif




 <!--<H4>Preguntas más frecuentes (AYUDAS)</H4>
         <a class="btn btn-primary" href="{{url('/uploads/GSCYPJ/preguntas.docx')}}" role="button">F A Q</a><br><br>-->



       
        
      </form>
    </div>
  </div>
</div>






<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
 MENSAJE
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">MENSAJE DE INICIO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <!--<h5 align="center">MENSAJE</h5><br>-->

<h5>"Recuerda colocar los datos completos y no dejar campos vacios."</h5>


      </div>
     
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



 $('#se_realizo_mesa').change(function(evento){
         valor = $(this).val();



         if (valor=="si") {
          $('#show_asistencia').show();
          $('#show_descripcion').hide();
         }else if(valor=="no"){
           $('#show_descripcion').show();
            $('#show_asistencia').hide();

         }else{

          $('#show_asistencia').hide();
            $('#show_descripcion').hide();

         }

});




  $('#alcaldia').change(function(evento){
          id_alcaldia = $(this).val();

          selected_dependiente('ct',id_alcaldia);

 });




 

</script>

@endsection








