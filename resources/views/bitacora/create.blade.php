@extends('adminlte::page')

@section('title', 'Género')

@section('content_header')
    <h1>Crear Género</h1>
@stop

@section('content')

<P></P>
    <p>Bienvenidos al control de sistema del género de las personas de la Fosforera Centroamericana.</p>
<P></P>

<form action="/genero" method="post">
@csrf
<div class="col-lg-12 left">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 left">
            <div class="form-group has-primary">
            <x-jet-label for="nombre_genero" value="{{ __('Nombre del Género') }}" />
            <x-jet-input id="nombre_genero" class="form-control" type="text" style="text-transform:uppercase;" name="nombre_genero" :value="old('nombre_genero')" minlenght="25" maxlength="50" required="" pattern="[a-zA-Z]+" />
            </div>
        </div>
    </div>
</div>
<div class="col-lg-12 left">
    <div class="row">
        <div class="col-lg-12 col-md-4 col-sm-6 col-xs-12">
            <div class="form-group has-primary">
            <x-jet-label for="descripcion_genero" value="{{ __('Descripción del Género') }}" />
            <x-jet-input id="descripcion_genero" class="form-control" type="text" style="text-transform:uppercase;" name="descripcion_genero"  :value="old('descripcion_genero')"  maxlength="500" required="" pattern="[a-zA-Z]+"/>
            </div>
        </div>
    </div>
</div>

<button type="submit" class="btn btn-success">Guardar</button>
<a href="/genero" class="btn btn-danger">Cancelar</a>

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