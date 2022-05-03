@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 align="left">Generador de Codigo</h1>
@stop

@section('content')
<table id="example" class="display nowrap" style="width:100%">
        <thead>
            <tr class="text-primary">
                <th class="bg-primary">Codigo</th>
                <th class="bg-primary">Nombre</th>
                <th class="bg-primary">Descripcion</th>
                <th class="bg-primary">Peso</th>
                <th class="bg-primary">Cantidad</th>
                <th class="bg-primary">Fecha de Creación</th>
                <th class="bg-primary">Codigo de barras</th>
            </tr>
        </thead>
        <tbody>
          @foreach($productos as $producto)
            <tr>
                <td>{{$producto->id}}</td>
                <td>{{$producto->nombre}}</td>
                <td>{{$producto->descripcion}}</td>
                <td>{{$producto->peso}}</td>
                <td>{{$producto->cantidad}}</td>
                <td>{{$producto->created_at}}</td>
                 <td><a href="/ver?codigo={{$producto->id}}">Ver</a></td>
            </tr>
          @endforeach
        </tbody>
        <tfoot>
          <tr class="text-primary">
                <th class="bg-primary">Codigo</th>
                <th class="bg-primary">Nombre</th>
                <th class="bg-primary">Descripcion</th>
                <th class="bg-primary">Peso</th>
                <th class="bg-primary">Cantidad</th>
                <th class="bg-primary">Fecha de Creación</th>
                <th class="bg-primary">Codigo de barras</th>
            </tr>
        </tfoot>
    </table>


    <style type="text/css">
      
      
  </style>
  
@stop


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js">
    
</script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="
https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js">  
</script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
    
    <script> 
$(document).ready(function() {
    $('#example').DataTable( {
        lengthChange: true,
        dom: 'Bfrtip',
        buttons: [
            'csv', 'excel', 'pdf'
        ]
    } );
} );
    </script>   

@stop

