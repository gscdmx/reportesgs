<table>
    <thead>
    <tr>
            <th>ALCALDÍA</th>
            <th>REGIÓN</th>  
            <th>SECTOR</th>
            <th>COORDINACIÓN TERRITORIAL</th>
            <th>ID</th>  
            <th>FECHA DEL EVENTO</th>
            <th>HORA DE EVENTO</th>   
            <th>HORA DE TÉRMINO DEL EVENTO</th>
            <th>TIPO DE DOCUMENTO</th>              
            <th>ASUNTO</th>   
            <th>DOMICILIO</th>  
            <th>COLONIA</th>
            <th>DESCRIPCION DEL HECHO</th>   
            <th>HUBO ACUERDOS</th>
            <th>RESPUESTA SI, ESTE ES EL ACUERDO</th>
            <th>OBSERVACIONES</th>
            <th>FECHA DE CAPTURA REAL</th>
            <th>FECHA DE ACTUALIZACIÓN Ó MODIFICACIÓN DEL REGISTRO</th>
            <th>CON IMAGEN</th>
            <th>CON ARCHIVO PDF</th>
            
    </tr>
    </thead>
    <tbody>
    @foreach($datos as $dato)
        <tr>
            <td>{{ $dato->delegacion }}</td>
            <td>{{ $dato->region }}</td>
            <td>{{ $dato->sector }}</td>
            <td>{{ $dato->ct2 }}</td>
            <td>{{ $dato->id }}</td>
            <td>{{ $dato->fecha }}</td>
            <td>{{ $dato->hora_i }}</td>
            <td>{{ $dato->hora_f }}</td>
            <td>{{ $dato->tipo_documento }}</td>
            <td>{{ $dato->asunto }}</td>
            <td>{{ $dato->domicilio }}</td>
            <td>{{ $dato->colonia }}</td>
            <td>{{ $dato->descripcion_hecho }}</td>
            <td>{{ $dato->hubo_acuerdos }}</td>
            <td>{{ $dato->descripcion_acuerdos }}</td>
            <td>{{ $dato->observaciones }}</td>
            <td>{{ $dato->created_at }}</td>
            <td>{{ $dato->updated_at }}</td>
            <td>
                @if($dato->archivo_imagen!=null||$dato->archivo_imagen!='')
                <a href="{{url('/uploads'.'/'.$dato->archivo_imagen)}}">{{$dato->archivo_imagen}}</a>
                @else
                SIN IMAGEN
                @endif
            </td>
            <td>

                 @if($dato->archivo!=null||$dato->archivo!='')
                <a href="{{url('/uploads'.'/'.$dato->archivo)}}">{{$dato->archivo}}</a>
                @else
                SIN DOCUMENTO
                @endif

            </td>
            
        </tr>
    @endforeach
    </tbody>
</table>


