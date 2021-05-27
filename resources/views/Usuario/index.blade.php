@extends('adminlte::page')

@section('css')
<link href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css" rel="stylesheet">

@section('title', 'Usuarios')

@section('content_header')
    <h1>Tabla Usuarios</h1>
@stop

@section('content')


<a href="user/create" class="btn btn-primary" type="submit">Crear</a>

<br><br>
            <table id="usuario" class="table table-striped table-bordered table-condensed table-hover" cellspacing="0" cellpadding="0" width="100%">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nombre de Usuario</th>
                        <th scope="col">Correo del Usuario</th>
                        <th scope="col">Roll </th>
                        <th scope="col"></th>

                    </tr>
                </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>

            <td></td>



                <td>
                    <a href="/user/{{$user->id}}/edit" class="btn btn-warning btn-sm">Editar</a>
                </td>
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
    $('#usuario').DataTable();
} );
</script>

@endsection
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
