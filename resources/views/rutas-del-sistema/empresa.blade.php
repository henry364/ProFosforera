@extends('adminlte::page')

@section('title', 'Empresas')

@section('content_header')
    <h1>Empresas</h1>
@stop

@section('content')

<P></P>
    <p>Bienvenidos al control de sistema de las empresas que proveen y son clientes de la Fosforera Centroamericana.</p>
<P></P>

<div class="col-lg-12 left">
    <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="form-group has-primary">
            <x-jet-label for="nombre_empresa" value="{{ __('Nombre de la Empresa') }}" />
            <x-jet-input id="nombre_empresa" class="form-control" type="text" name="nombre_empresa" maxlength="50" :value="old('nombre_empresa')" required autofocus autocomplete="nombre_empresa" />
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 left">
            <div class="form-group has-primary">
            <x-jet-label for="telefono_empresa" value="{{ __('Teléfono de la Empresa') }}" />
            <x-jet-input id="telefono_empresa" class="form-control" type="text" name="telefono_empresa" maxlength="50" :value="old('telefono_empresa')" required  />
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="form-group has-primary">
            <x-jet-label for="correo_empresa" value="{{ __('Correo Electrónico de la Empresa') }}" />
            <x-jet-input id="correo_empresa" class="form-control" type="text" name="correo_empresa" maxlength="50" :value="old('correo_empresa')" required />
            </div>
        </div>
    </div>
</div>
<div class="col-lg-12 left">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="form-group has-primary">
            <x-jet-label for="rtn_empresa" value="{{ __('RTN de la Empresa') }}" />
            <x-jet-input id="rtn_empresa" class="form-control" type="text" name="rtn_empresa" maxlength="50" :value="old('rtn_empresa')" required />
            </div>
        </div>
        <div class="col-lg-8 col-md-4 col-sm-6 col-xs-12">
            <div class="form-group has-primary">
            <x-jet-label for="direccion_empresa" value="{{ __('Dirección de la Empresa') }}" />
            <x-jet-input id="direccion_empresa" class="form-control" type="text" name="direccion_empresa" maxlength="50" :value="old('direccion_empresa')" required />
            </div>
        </div>
    </div>
</div>
<div class="col-lg-12 left">
    <div class="row">
        <div class="col-lg-12 col-md-4 col-sm-6 col-xs-12">
            <div class="form-group has-primary">
            <x-jet-label for="descripcion_empresa" value="{{ __('Descripción de la Empresa') }}" />
            <x-jet-input id="descripcion_empresa" class="form-control" type="text" name="descripcion_empresa" maxlength="50" :value="old('descripcion_empresa')" required />
            </div>
        </div>
    </div>
</div>








<button class="btn btn-dark" type="submit"><i class="fa fa-caret-right"></i> Nuevo</button>
<button class="btn btn-dark" type="submit"><i class="fa fa-caret-right"></i> Registrar</button>
<button class="btn btn-dark" type="submit"><i class="fa fa-caret-right"></i> Cancelar</button>
<a href="empresa/tabla"><input type= "submit" value="Ver Tabla" class="btn btn-danger"></a>

<br><br>

<div class="col-lg-12 left">

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop