@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    <h1>Crear Usuario</h1>
@stop

@section('content')

<P></P>
    <p>Bienvenidos al control de sistema de Usuarios de la Fosforera Centroamericana.</p>
<P></P>

<form action="/user" method="post">
@csrf
<div class="col-lg-12 left">
    <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="form-group has-primary">
            <x-jet-label for="nombre_usuario" value="{{ __('name') }}" />
            <x-jet-input id="nombre_ususario" class="form-control" type="text" style="text-transform:uppercase;" name="name"  minlenght="25" maxlength="50" :value="old('name')" autofocus=""   />
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="form-group has-primary">
            <x-jet-label for="correo_Usuario" value="{{ __('email') }}" />
            <x-jet-input id="correo_cliente" class="form-control" type="email" style="text-transform:uppercase;" name="mail"  minlenght="25" maxlength="50"  :value="old('email')"  autofocus="" />
            </div>
        </div>


        <div class="col-lg-12 left">
            <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="form-group has-primary">
                        <x-jet-label for="password" value="{{ __('Password') }}" />
                        <x-jet-input id="password" class="form-control" type="password" name="password"  minlenght="8" maxlength="15"   autofocus="" />
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="form-group has-primary">
                        <x-jet-label for="password_confirmation" value="{{ __('Confirm Password   dd') }}" />
                        <x-jet-input id="password_confirmation" class="form-control"type="password" name="password_confirmation"  autofocus="" />
                    </div>
                </div>

      </div>
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
