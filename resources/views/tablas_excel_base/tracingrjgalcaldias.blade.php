<table>
    <thead>
    <tr>
            <th>ID APP</th>
            <th>ID RJG</th> 
            <th>ALCALDÍA</th>
            <th>REGIÓN</th>  
            <th>SECTOR</th>
            <th>COORDINACIÓN TERRITORIAL</th>    
            <th>FECHA DE RESOLUCIÓN</th>
            <th>HORA DE RESOLUCIÓN</th>   
            <th>RESOLUCIÓN DEL ACUERDO</th>
            <th>FECHA REAL DE CAPTURA</th>              
            <th>FECHA DE ACTUALIZACIÓN Ó MODIFICACIÓN DEL REGISTRO</th>   
            <th>CON IMAGEN</th>
            <th>CON ARCHIVO PDF</th>
            
    </tr>
    </thead>
    <tbody>
    @foreach($datos as $dato)
        <tr>
            <td>{{ $dato->id }}</td>
            <td>{{ $dato->numero }}</td>    
            <td>{{ $dato->delegacion }}</td>
            <td>{{ $dato->region }}</td>
            <td>{{ $dato->sector }}</td>
            <td>{{ $dato->ct2 }}</td>
            <td>{{ $dato->fecha }}</td>
            <td>{{ $dato->hora_i }}</td>
            <td>{{ $dato->resolucion }}</td>    
            <td>{{ $dato->created_at }}</td>
            <td>{{ $dato->updated_at }}</td>
            <td>
                @if($dato->archivo_imagen!=null||$dato->archivo_imagen!='')
                <a href="{{url('/tracing'.'/'.$dato->archivo_imagen)}}">{{$dato->archivo_imagen}}</a>
                @else
                SIN IMAGEN
                @endif
            </td>
            <td>

                 @if($dato->archivo!=null||$dato->archivo!='')
                <a href="{{url('/tracing'.'/'.$dato->archivo)}}">{{$dato->archivo}}</a>
                @else
                SIN DOCUMENTO
                @endif

            </td>
            
        </tr>
    @endforeach
    </tbody>
</table>


