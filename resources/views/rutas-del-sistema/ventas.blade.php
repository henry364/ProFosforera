@extends('adminlte::page')

@section('title', 'Ventas')

@section('content_header')
    <h1>Ventas</h1>
@stop

@section('content')

<P></P>
    <p>Bienvenidos al control de sistema de las ventas de la Fosforera Centroamericana.</p>
<P></P>

<div class="col-lg-12 left">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 left">
            <div class="form-group has-primary">
            <x-jet-label for="nombre_producto" value="{{ __('Nombre del Producto:') }}" />
            <select name="cod_tipo_producto" class="form-control" maxlength="50">
                   <option value="--Seleccione">--Seleccione</option>
             </select>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 left">
            <div class="form-group has-primary">
            <x-jet-label for="precio_producto" value="{{ __('Unidades en Existencia:') }}" />
            <x-jet-input id="precio_producto" class="form-control" type="text" name="precio_producto" maxlength="50" :value="old('precio_producto')" required />
            </div>
        </div>
    </div>
</div>
<div class="col-lg-12 left">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 left">
            <div class="form-group has-primary">
            <x-jet-label for="nombre_producto" value="{{ __('Nombre del Cliente:') }}" />
            <select name="cod_tipo_producto" class="form-control" maxlength="50">
                   <option value="--Seleccione">--Seleccione</option>
             </select>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 left">
            <div class="form-group has-primary">
            <br>
            <a href="producto/tabla"><input type= "submit" value="Registrar Cliente si no Existe" class="btn btn-danger"></a>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 left">
            <div class="form-group has-primary">
            <x-jet-label for="descripcion_producto" value="{{ __('Venta al Contado o al Cr??dito:') }}" />
            <select name="cod_tipo_producto" class="form-control" maxlength="50">
                   <option value="--Seleccione">--Seleccione</option>
             </select>
            </div>
        </div> 
    </div>
</div>
<div class="col-lg-12 left">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 left">
            <div class="form-group has-primary">
            <x-jet-label for="precio_producto" value="{{ __('Unidades a Vender del Producto:') }}" />
            <x-jet-input id="precio_producto" class="form-control" type="text" name="precio_producto" maxlength="50" :value="old('precio_producto')" required />
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 left">
            <div class="form-group has-primary">
            <x-jet-label for="descripcion_producto" value="{{ __('Porcentaje de Rebaja Sobre Ventas:') }}" />
            <x-jet-input id="precio_producto" class="form-control" type="text" name="precio_producto" maxlength="50" :value="old('precio_producto')" required />
            </div>
        </div> 
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 left">
            <div class="form-group has-primary">
            <x-jet-label for="precio_producto" value="{{ __('Porcentaje de Descuento Sobre Ventas:') }}" />
            <x-jet-input id="precio_producto" class="form-control" type="text" name="precio_producto" maxlength="50" :value="old('precio_producto')" required />
            </div>
        </div>
    </div>
</div>   
<div class="col-lg-12 left">
    <div class="row">
        <div class="col-lg-12 col-md-4 col-sm-6 col-xs-12 left">
            <div class="form-group has-primary">
            <x-jet-label for="descripcion_producto" value="{{ __('Descripci??n de la Venta:') }}" />
            <x-jet-input id="descripcion_producto" class="form-control" type="text" name="descripcion_producto" maxlength="50" :value="old('descripcion_producto')" required />
            </div>
        </div> 
    </div>
</div>        



<button class="btn btn-dark" type="submit"><i class="fa fa-caret-right"></i> Nuevo</button>
<button class="btn btn-dark" type="submit"><i class="fa fa-caret-right"></i> Registrar</button>
<button class="btn btn-dark" type="submit"><i class="fa fa-caret-right"></i> Cancelar</button>
<a href="producto/tabla"><input type= "submit" value="Ver Tabla" class="btn btn-danger"></a>


<br><br>

<div class="col-lg-12 left">

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop