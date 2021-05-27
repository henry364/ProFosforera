@extends('adminlte::page')

@section('title', 'Roles')

@section('content_header')

    <h1>Listado de roles</h1>
    <a href="{{route('admin.roles.create')}}" class="btn btn-primary" >Crear</a>
@stop

@section('content')
@if (session('info'))
<div class="alert alert-success">
    <strong>
        {{session('info')}}
    </strong>
</div>
@endif


<div class="cart">

    <div class="cart-body">
        <table  id="tablaR" class="table table-striped table-bordered table-condensed table-hover" cellspacing="0" cellpadding="0" width="100%">
            <thead class="thead-dark"   >
               <tr>
                   <th>ID</th>
                   <th>Nombre de rol</th>
                   <th width="70" >Opciones</th>
               </tr>

            </thead>
            <tbody>
                @foreach ( $roles as $role)
                <tr>
                    <td>{{$role->id}}</td>
                    <td>{{$role->name}}</td>
                    <td width="70">

                        <form action="{{route('admin.roles.destroy', $role)}}" method="POST">
                            <a href="{{route('admin.roles.edit', $role)}}" class="btn btn-warning btn-sm fa fa-edit"></a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm fa fa-times-circle" ></button>
                        </form>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>

    </div>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
 @section('js')
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap5.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#tablaR').DataTable({
                    "language": {
                  "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
                }
                });
            } );
            </script>


     @endsection
@section('js')
    <script> console.log('Hi!'); </script>
@stop


<link href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css" rel="stylesheet">
