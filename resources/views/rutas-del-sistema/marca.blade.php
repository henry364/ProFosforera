@extends('adminlte::page')

@section('title', 'Marcas')

@section('content_header')
    <h1>Marca de los Productos</h1>
@stop

@section('content')

<P></P>
    <p>Bienvenidos al control de sistema del Marca de los Productos de la Fosforera Centroamericana.</p>
<P></P>

<div class="col-lg-12 left">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 left">
            <div class="form-group has-primary">
            <x-jet-label for="nombre_marca" value="{{ __('Nombre de la Marca') }}" />
            <x-jet-input id="nombre_marca" class="form-control" type="text" name="nombre_marca" maxlength="50" :value="old('nombre_marca')" required autofocus autocomplete="nombre_marca" />
            </div>
        </div>
        <div class="col-lg-8 col-md-4 col-sm-6 col-xs-12">
            <div class="form-group has-primary">
            <x-jet-label for="descripcion_marca" value="{{ __('Descripción de la marca') }}" />
            <x-jet-input id="descripcion_marca" class="form-control" type="text" name="descripcion_marca" maxlength="50" :value="old('descripcion_marca')" required />
            </div>
        </div>
    </div>
</div>

<button class="btn btn-dark" type="submit"><i class="fa fa-caret-right"></i> Nuevo</button>
<button class="btn btn-dark" type="submit"><i class="fa fa-caret-right"></i> Registrar</button>
<button class="btn btn-dark" type="submit"><i class="fa fa-caret-right"></i> Cancelar</button>
<a href="marca/tabla"><input type= "submit" value="Ver Tabla" class="btn btn-danger"></a>

<br><br>

<div class="col-lg-12 left">

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop