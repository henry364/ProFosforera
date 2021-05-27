@extends('adminlte::page')

@section('title', 'Tarjeta Almacén PEPS')

@section('content_header')
    <h1>Tarjeta de Almacén PEPS</h1>
@stop

@section('content')

<P></P>
    <p>Bienvenidos al control de la tarjeta de almacén por medio del metodo de primeras entradas y primeras salidas (PEPS) de la Fosforera Centroamericana.</p>
<P></P>

<div class="col-lg-12 left">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="form-group has-primary">
            <x-jet-label for="nombre_producto" value="{{ __('Nombre del Producto') }}" />
            <select name="nombre_producto" class="form-control" maxlength="50">
                   <option value="--Seleccione">--Seleccione</option>
             </select>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 left">
            <div class="form-group has-primary">
            <x-jet-label for="unidades_producto_entrada_peps" value="{{ __('Entrada de Unidades del Producto') }}" />
            <x-jet-input id="unidades_producto_entrada_peps" class="form-control" type="text" name="unidades_producto_entrada_peps" maxlength="50" :value="old('unidades_producto_entrada_peps')" required  />
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 left">
            <div class="form-group has-primary">
            <x-jet-label for="unidades_producto_salida_peps" value="{{ __('Salida de Unidades del Producto') }}" />
            <x-jet-input id="unidades_producto_salida_peps" class="form-control" type="text" name="unidades_producto_salida_peps" maxlength="50" :value="old('unidades_producto_salida_peps')" required  />
            </div>
        </div>
    </div>
</div>
<div class="col-lg-12 left">
    <div class="row">
        <div class="col-lg-12 col-md-4 col-sm-6 col-xs-12 left">
            <div class="form-group has-primary">
            <x-jet-label for="descripcion_cliente" value="{{ __('Descripción del Cliente') }}" />
            <x-jet-input id="descripcion_cliente" class="form-control" type="text" name="descripcion_cliente" maxlength="50" :value="old('descripcion_cliente')" required autofocus autocomplete="descripcion_cliente" />
            </div>
        </div>
    </div>
</div>






<button class="btn btn-dark" type="submit"><i class="fa fa-caret-right"></i> Nuevo</button>
<button class="btn btn-dark" type="submit"><i class="fa fa-caret-right"></i> Registrar</button>
<button class="btn btn-dark" type="submit"><i class="fa fa-caret-right"></i> Cancelar</button>
<a href="cliente/tabla"><input type= "submit" value="Ver Tabla" class="btn btn-danger"></a>

<br><br>

<div class="col-lg-12 left">

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop