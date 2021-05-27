@extends('adminlte::page')

@section('title', 'Materia Prima')

@section('content_header')
    <h1>Materia Prima</h1>
@stop

@section('content')

<P></P>
    <p>Bienvenidos al control de sistema de la Materia Prima de la Fosforera Centroamericana.</p>
<P></P>

<div class="col-lg-12 left">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 left">
            <div class="form-group has-primary">
            <x-jet-label for="nombre_producto" value="{{ __('Nombre de la Materia Prima') }}" />
            <x-jet-input id="nombre_producto" class="form-control" type="text" name="nombre_producto" maxlength="50" :value="old('nombre_producto')" required autofocus autocomplete="nombre_producto" />
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 left">
            <div class="form-group has-primary">
            <x-jet-label for="cod_marca" value="{{ __('Tipo de la Materia Prima') }}" />
            <select name="cod_marca" class="form-control" maxlength="50">
                   <option value="--Seleccione">--Seleccione</option>
             </select>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 left">
            <div class="form-group has-primary">
            <x-jet-label for="cod_marca" value="{{ __('Marca de la Materia Prima') }}" />
            <select name="cod_marca" class="form-control" maxlength="50">
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
            <x-jet-label for="cod_proveedor" value="{{ __('Proveedor de la Materia Prima') }}" />
            <select name="cod_proveedor" class="form-control" maxlength="50">
                   <option value="--Seleccione">--Seleccione</option>
             </select>
            </div>
        </div>    
         <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 left">
            <div class="form-group has-primary">
            <x-jet-label for="cod_almacen" value="{{ __('Almacén para la Materia Prima') }}" />
            <select name="cod_almacen" class="form-control" maxlength="50">
                   <option value="--Seleccione">--Seleccione</option>
             </select>
             </div>
        </div> 
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 left">
            <div class="form-group has-primary">
            <x-jet-label for="tipo_proveedor" value="{{ __('Precio de Compra de la Materia Prima por Unidad') }}" />
            <x-jet-input id="nombre_producto" class="form-control" type="text" name="nombre_producto" maxlength="50" :value="old('nombre_producto')" required autofocus autocomplete="nombre_producto" />
            </div>
        </div>     
    </div>
</div>   
<div class="col-lg-12 left">
    <div class="row">
        <div class="col-lg-12 col-md-4 col-sm-6 col-xs-12 left">
            <div class="form-group has-primary">
            <x-jet-label for="descripcion_producto" value="{{ __('Descripción de la Materia Prima') }}" />
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