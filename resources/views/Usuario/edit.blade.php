@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    <h1>Editar Usuario</h1>
@stop

@section('content')

<P></P>
    <p>Bienvenidos al control de sistema de Usuarios de la Fosforera Centroamericana.</p>
<P></P>

<form action="/user/{{$user->id}}/edit" method="post">
@csrf
@method('PUT')

<div class="col-lg-12 left">
    <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="form-group has-primary">
            <x-jet-label for="nombre_usuario" value="{{ __('Nombre de Usuario') }}" />
            <x-jet-input id="nombre_ususario" class="form-control" type="text" style="text-transform:uppercase;" name="name" maxlength="50" value="{{$user->name}}" required autofocus autocomplete="nombre_usuario" />
            </div>
        </div>


        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="form-group has-primary">
            <x-jet-label for="correo_cliente" value="{{ __('Correo del Usuario') }}" />
            <x-jet-input id="correo_cliente" class="form-control" type="text" style="text-transform:uppercase;" name="email" maxlength="50" value="{{$user->email}}" required />
            </div>
        </div>
        </div>




    </div>
</div>
<h2>Listado de Roles</h2>
<div class="col-lg-12 left">
    @foreach ($roles as $role )
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" />
        <label class="form-check-label" for="inlineCheckbox1" class="mr-4">{{$role['name']}}</label>
      </div>

      @endforeach
</div>


<button type="submit" class="btn btn-success">Guardar</button>
<a href="/user" class="btn btn-danger">Cancelar</a>

</form>

<br><br>

<div class="col-lg-12 left">

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
