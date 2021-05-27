@extends('adminlte::page')

@section('title', 'Proveedores')

@section('content_header')
    <h1>Registrar Proveedor</h1>
@stop

@section('content')

<P></P>
    <p>Bienvenidos al control de sistema del registro de los proveedores de la Fosforera Centroamericana.</p>
<P></P>

<div class="col-lg-12 left">
    <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="form-group has-primary">
            <x-jet-label for="nombre_persona" value="{{ __('Nombre del Proveedor') }}" />
            <x-jet-input id="nombre_persona" class="form-control" type="text" name="nombre_persona" maxlength="50" :value="old('nombre_persona')" required autofocus autocomplete="nombre_persona" />
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="form-group has-primary">
            <x-jet-label for="telefono_persona" value="{{ __('Teléfono del Proveedor') }}" />
            <x-jet-input id="telefono_persona" class="form-control" type="text" name="telefono_persona" maxlength="50" :value="old('telefono_persona')" required  />
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="form-group has-primary">
            <x-jet-label for="correo_persona" value="{{ __('Correo Electrónico del Proveedor') }}" />
            <x-jet-input id="correo_persona" class="form-control" type="text" name="correo_persona" maxlength="50" :value="old('correo_persona')" required />
            </div>
        </div>
    </div>
</div>
<div class="col-lg-12 left">
    <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 left">
            <div class="form-group has-primary">
            <x-jet-label for="rtn_persona" value="{{ __('RTN del Proveedor') }}" />
            <x-jet-input id="rtn_persona" class="form-control" type="text" name="RTN_Persona" maxlength="50" :value="old('rtn_persona')" required />
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="form-group has-primary">
            <x-jet-label for="id_persona" value="{{ __('ID del Proveedor (Persona Natural)') }}" />
            <x-jet-input id="id_persona" class="form-control" type="text" name="Id_Persona" maxlength="50" :value="old('id_persona')" required />
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 left">
            <div class="form-group has-primary">
            <x-jet-label for="cod_genero" value="{{ __('Genero del Proveedor (Persona Natural)') }}" />
            <select name="cod_genero" class="form-control" maxlength="50">
                   <option value="--Seleccione">--Seleccione</option>
             </select>
            </div>
        </div>   
    </div>
</div>
<div class="col-lg-12 left">
    <div class="row">
        <div class="col-lg-12 col-md-4 col-sm-6 col-xs-12">
            <div class="form-group has-primary">
            <x-jet-label for="direccion_persona" value="{{ __('Dirección del Proveedor') }}" />
            <x-jet-input id="direccion_persona" class="form-control" type="text" name="direccion_persona" maxlength="50" :value="old('direccion_persona')" required />
            </div>
        </div>
    </div>
</div>
<div class="col-lg-12 left">
    <div class="row">
        <div class="col-lg-12 col-md-4 col-sm-6 col-xs-12">
            <div class="form-group has-primary">
            <x-jet-label for="descripcion_persona" value="{{ __('Descripción del Proveedor') }}" />
            <x-jet-input id="descripcion_persona" class="form-control" type="text" name="descripcion_persona" maxlength="50" :value="old('descripcion_persona')" required />
            </div>
        </div>
    </div>
</div>



<button class="btn btn-dark" type="submit"><i class="fa fa-caret-right"></i> Nuevo</button>
<button class="btn btn-dark" type="submit"><i class="fa fa-caret-right"></i> Registrar</button>
<button class="btn btn-dark" type="submit"><i class="fa fa-caret-right"></i> Cancelar</button>
<a href="proveedor/tabla"><input type= "submit" value="Ver Tabla" class="btn btn-danger"></a>

<br><br>

<div class="col-lg-12 left">

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop