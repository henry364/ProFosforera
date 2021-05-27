@extends('adminlte::page')

@section('title', 'Género')

@section('content_header')
    <h1>Género</h1>
@stop

@section('content')

<P></P>
    <p>Bienvenidos al control de sistema del género de las personas de la Fosforera Centroamericana.</p>
<P></P>

<div class="col-lg-12 left">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 left">
            <div class="form-group has-primary">
            <x-jet-label for="nombre_genero" value="{{ __('Nombre del Género') }}" />
            <x-jet-input id="nombre_genero" class="form-control" type="text" name="nombre_genero" maxlength="50" :value="old('nombre_genero')" required autofocus autocomplete="nombre_genero" />
            </div>
        </div>
    </div>
</div>
<div class="col-lg-12 left">
    <div class="row">
        <div class="col-lg-12 col-md-4 col-sm-6 col-xs-12">
            <div class="form-group has-primary">
            <x-jet-label for="descripcion_genero" value="{{ __('Descripción del Género') }}" />
            <x-jet-input id="descripcion_genero" class="form-control" type="text" name="descripcion_genero" maxlength="50" :value="old('descripcion_genero')" required />
            </div>
        </div>
    </div>
</div>

<button class="btn btn-dark" type="submit"><i class="fa fa-caret-right"></i> Nuevo</button>
<button class="btn btn-dark" type="submit"><i class="fa fa-caret-right"></i> Registrar</button>
<button class="btn btn-dark" type="submit"><i class="fa fa-caret-right"></i> Cancelar</button>
<a href="genero/tabla"><input type= "submit" value="Ver Tabla" class="btn btn-danger"></a>

<br><br>

<div class="col-lg-12 left">

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop