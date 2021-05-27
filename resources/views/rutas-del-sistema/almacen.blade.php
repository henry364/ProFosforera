@extends('adminlte::page')

@section('title', 'Almacén')

@section('content_header')
    <h1>Almacén</h1>
@stop

@section('content')

<P></P>
    <p>Bienvenidos al control de sistema de los Almacenes de la Fosforera Centroamericana.</p>
<P></P>

<div class="col-lg-12 left">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="form-group has-primary">
            <x-jet-label for="nombre_almacen" value="{{ __('Nombre del Almacén') }}" />
            <x-jet-input id="nombre_almacen" class="form-control" type="text" name="nombre_almacen" maxlength="50" :value="old('nombre_empresa')" required autofocus autocomplete="nombre_empresa" />
            </div>
        </div>
    </div>
</div>
<div class="col-lg-12 left">
    <div class="row">
    <div class="col-lg-12 col-md-4 col-sm-6 col-xs-12 left">
            <div class="form-group has-primary">
            <x-jet-label for="descripcion_cliente" value="{{ __('Descripción del Almacén') }}" />
            <x-jet-input id="descripcion_cliente" class="form-control" type="text" name="descripcion_cliente" maxlength="50" :value="old('descripcion_cliente')" required autofocus autocomplete="descripcion_cliente" />
            </div>
        </div>
    </div>
</div>






<button class="btn btn-dark" type="submit"><i class="fa fa-caret-right"></i> Nuevo</button>
<button class="btn btn-dark" type="submit"><i class="fa fa-caret-right"></i> Registrar</button>
<button class="btn btn-dark" type="submit"><i class="fa fa-caret-right"></i> Cancelar</button>
<a href="almacen/tabla"><input type= "submit" value="Ver Tabla" class="btn btn-danger"></a>

<br><br>

<div class="col-lg-12 left">

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop