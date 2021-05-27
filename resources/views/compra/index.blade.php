@extends('adminlte::page')

@section('css')
<link href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">


@section('title', 'compra')

@section('content_header')
    <h1>Tabla compra</h1>
@stop

@section('content')

<P></P>
<p>Bienvenidos al control de tabla de las compras de la Fosforera Centroamericana.</p>
<P></P>



<a href="compra/create" class="btn btn-primary" type="submit">Crear</a>

<br><br>
<div class="container">
       <div class="row">
           <div class="col-lg-12">
            <table id="compra" class="table table-striped table-bordered table-condensed table-hover" cellspacing="0" cellpadding="0" width="100%">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Código del compra</th>
                        <th scope="col">Proveedor del compra</th>
                        <th scope="col">Fecha del compra</th>
                        <th scope="col">Producto (Cantidad)</th>
                        <th scope="col">Descripción del compra</th>
                        <th scope="col">Fecha de Registro</th>
                        <th scope="col">Fecha de Modificación</th>
                        <th scope="col">Acción de la Columna</th>
                    </tr>
                </thead>
        <tbody>
@foreach($compras as $compra)
            <tr data-entry-id="{{$compra->id}}">
                <td>
                <a class="btn btn-info btn-sm fa fa-caret-square-down"></a>
                {{$compra->id}}
                </td>
                @foreach($proveedors as $proveedor)
                <td>{{$proveedor->nombre_proveedor}}</td>
                @endforeach
                <td>{{$compra->fecha_compra}}</td>
                <td>
                    <ul>
                        @foreach($compra->productos as $item)
                            <li>{{ $item->nombre_producto}} ({{ $item->pivot->cantidad}})</li>
                        @endforeach
                    </ul>
                </td>
                <td>{{$compra->descripcion_compra}}</td>
                <td>{{$compra->created_at}}</td>
                <td>{{$compra->updated_at}}</td>
                <td>
                <form action="{{route('compra.destroy',$compra->id)}}" method="post">
                <a href="{{ route('compra.show', $compra->id) }}"class="btn btn-success btn-sm fa fa-file-pdf"></a>
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
       </div>
    </div>
</div>

@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap5.min.js"></script>

<script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>

<script>
$(document).ready(function() {
    $('#compra').DataTable({

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

@endsection
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
