@extends('adminlte::page')

@section('css')
<link href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css" rel="stylesheet">

@section('title', 'Permisos')

@section('content_header')
    <h1>Lista de permisos</h1>
@stop


@section('content')

    @section('content')
    @if (session('info'))
    <div class="alert alert-success">
        <strong>
            {{session('info')}}
        </strong>
    </div>
    @endif

    <a href="{{route('admin.permissions.create')}}" class="btn btn-primary" type="submit">Crear</a>
    <br><br>
        <table id="tablaP" class="table table-striped table-bordered table-condensed table-hover" cellspacing="0" cellpadding="0" width="100%">
            <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre del permiso</th>
                        <th scope="col">Descripción</th>

                        <th scope="col" width="70"  >Acción</th>

                    </tr>
                </thead>
        <tbody>
            @foreach($permissions as $permission)
             <tr>
                <td>{{$permission->id}}</td>
                <td>{{$permission->name}}</td>
                <td >{{$permission->descripcion}}</td>

                <td width="70">



                <form action="{{route('admin.permissions.destroy', $permission)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="{{route('admin.permissions.edit', $permission->id)}}" class="btn btn-warning btn-sm fa fa-edit"></a>
                    <button type="submit" class="btn btn-danger btn-sm   fa fa-times-circle"></button>
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
        <script>
            $(document).ready(function() {
                $('#tablaP').DataTable( {
                    "language": {
                  "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
                }
                }

                );
            } );
            </script>
     @endsection

    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
