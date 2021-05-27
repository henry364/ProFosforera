@extends('adminlte::page')

@section('title', 'Clientes')

@section('content_header')
    <h1>Clientes</h1>
@stop

@section('content')

<P></P>
    <p>Bienvenidos al control de sistema de los clientes de la Fosforera Centroamericana.</p>
<P></P>

<div class="col-lg-12 left">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="form-group has-primary">
            <x-jet-label for="cod_empresa" value="{{ __('Empresa Cliente') }}" />
            <select name="cod_empresa" class="form-control" maxlength="50">
                   <option value="--Seleccione">--Seleccione</option>
             </select>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="form-group has-primary">
            <x-jet-label for="cod_persona" value="{{ __('Persona Cliente') }}" />
            <select name="cod_persona" class="form-control" maxlength="50">
                   <option value="--Seleccione">--Seleccione</option>
             </select>
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