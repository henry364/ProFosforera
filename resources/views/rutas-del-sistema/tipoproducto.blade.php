@extends('adminlte::page')

@section('title', 'Tipo_Productos')

@section('content_header')
    <h1>Tipos de Productos</h1>
@stop

@section('content')

<P></P>
    <p>Bienvenidos al control de tipos de productos de la Fosforera Centroamericana.</p>
<P></P>

<div class="col-lg-12 left">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 left">
            <div class="form-group has-primary">
            <x-jet-label for="nombre_tipo_producto" value="{{ __('Nombre del Tipo de Producto') }}" />
            <x-jet-input id="nombre_tipo_producto" class="form-control" type="text" name="nombre_tipo_producto" maxlength="50" :value="old('nombre_tipo_producto')" required autofocus autocomplete="nombre_tipo_producto" />
            </div>
        </div>
    </div>
</div>
<div class="col-lg-12 left">
    <div class="row">
        <div class="col-lg-12 col-md-4 col-sm-6 col-xs-12">
            <div class="form-group has-primary">
            <x-jet-label for="descripcion_tipo_producto" value="{{ __('Descripción del Tipo de Producto') }}" />
            <x-jet-input id="descripcion_tipo_producto" class="form-control" type="text" name="descripcion_tipo_producto" maxlength="50" :value="old('descripcion_tipo_producto')" required />
            </div>
        </div>
    </div>
</div>

<button class="btn btn-dark" type="submit"><i class="fa fa-caret-right"></i> Nuevo</button>
<button class="btn btn-dark" type="submit"><i class="fa fa-caret-right"></i> Registrar</button>
<button class="btn btn-dark" type="submit"><i class="fa fa-caret-right"></i> Cancelar</button>
<a href="tipoproducto/tabla"><input type= "submit" value="Ver Tabla" class="btn btn-danger"></a>

<br><br>

<div class="col-lg-12 left">

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop