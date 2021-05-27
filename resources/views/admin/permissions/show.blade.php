@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<a href="{{route('admin.roles.create')}}" class="btn btn-primary btn-sm " >Crear</a>
    <h1>Listado de roles</h1>
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
        <table class="table table-striped table-bordered table-condensed table-hover" cellspacing="0" cellpadding="0" width="100%">
            <thead class="thead-dark"   >
               <tr>
                   <th>ID</th>
                   <th>Rol</th>
                   <th colspan="2">Opción</th>
               </tr>
               <tr></tr>
            </thead>
            <tbody>
                @foreach ( $roles as $role)
                <tr>
                    <td>{{$role->id}}</td>
                    <td>{{$role->name}}</td>
                    <td width="10">
                        <a href="{{route('admin.roles.edit', $role)}}" class="btn btn-warning btn-sm">Editar</a></td>
                    <td width="10">
                        <form action="{{route('admin.roles.destroy', $role)}}" method="POS">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Borrar</button>
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
    <script> console.log('Hi!'); </script>
@stop
