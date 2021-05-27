@extends('adminlte::page')

@section('css')
<link href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css" rel="stylesheet">

@section('title', 'Tipo de Productos')

@section('content_header')
    <h1>Tabla Tipo de Productos</h1>
@stop

@section('content')

<P></P>
<p>Bienvenidos al control de tabla de los tipos de productos de la Fosforera Centroamericana.</p>
<P></P>



<a href="tipo_producto/create" class="btn btn-primary" type="submit">Crear</a>

<br><br>

            <table id="tipo_producto" class="table table-striped table-bordered table-condensed table-hover" cellspacing="0" cellpadding="0" width="100%">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Código de Tipo de Producto</th>
                        <th scope="col">Nombre de Tipo de Producto</th>
                        <th scope="col">Descripción de Tipo de Producto</th>
                        <th scope="col">Fecha de Registro</th>
                        <th scope="col">Fecha de Modificación</th>
                        <th scope="col">Acción de la Columna</th>
                    </tr>
                </thead>
        <tbody>
@foreach($tipo_productos as $tipo_producto)
            <tr>
                <td>
                <a class="btn btn-info btn-sm fa fa-caret-square-down"></a>
                {{$tipo_producto->id}}
                </td>
                <td>{{$tipo_producto->nombre_tipo_producto}}</td>
                <td>{{$tipo_producto->descripcion_tipo_producto}}</td>
                <td>{{$tipo_producto->created_at}}</td>
                <td>{{$tipo_producto->updated_at}}</td>
                <td>
                <form action="{{route('tipo_producto.destroy',$tipo_producto->id)}}" method="post">
                    <a href="/tipo_producto/{{$tipo_producto->id}}/edit" class="btn btn-warning btn-sm fa fa-edit" onclick="return confirmedit()"></a>
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger btn-sm fa fa-times-circle" onclick="return confirmdelete()"></button>
                </form>
                </td>
            </tr>
@endforeach
        </tbody>
            </table>

</div>

@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>

<script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script>
$(document).ready(function() {
    $('#tipo_producto').DataTable({
        "language": {
      "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
    },
        responsive: true,
        dom: 'Bfrtip',
        buttons: [
            'copy', 'excel', 'pdf', 'print'
        ]
    });
} );
</script>

<script type="text/javascript">
    function confirmdelete()
    {
        var respuesta = confirm("estas seguro de eliminar este registro");
            if (respuesta ==true)
            {
                alert("registro eliminado con exito");  
                return true
            }
            else
            {
                return false;
            }
    }
</script>

<script type="text/javascript">
    function confirmedit()
    {
        var respuesta = confirm("estas seguro de editar este registro");
            if (respuesta ==true)
            {  
                return true
            }
            else
            {
                return false;
            }
    }
</script>

@endsection
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
