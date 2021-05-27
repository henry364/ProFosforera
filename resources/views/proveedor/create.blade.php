@extends('adminlte::page')

@section('title', 'Proveedores')

@section('content_header')
    <h1>Crear Proveedor</h1>
@stop

@section('content')

<P></P>
    <p>En esta parte usted puede registrar nuevos proveedores de la Fosforera Centroamericana.</p>
<P></P>

<form action="/proveedor" method="post">
@csrf
<div class="col-lg-12 left">
    <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="form-group has-primary">
            <x-jet-label for="nombre_proveedor" value="{{ __('Nombre del Proveedor') }}" />
            <x-jet-input id="nombre_proveedor" class="form-control" type="text" style="text-transform:uppercase;" name="nombre_proveedor" minlenght="25" maxlength="50"  :value="old('nombre_proveedor')"  autofocus=""  />
            @if ($errors->has('nombre_proveedor'))
            <div id="nombre_proveedor-error" class="error text-danger pl-3" for="nombre_proveedor" style="display: bock;" >
                <strong>
                    {{$errors -> first('nombre_proveedor')}}
                </strong>
            </div>
         @endif
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="form-group has-primary">
            <x-jet-label for="telefono_proveedor" value="{{ __('Teléfono del Proveedor') }}" />
            <x-jet-input id="telefono_proveedor" class="form-control" type="text" style="text-transform:uppercase;" name="telefono_proveedor" minlenght="8" maxlength="15" :value="old('telefono_proveedor')"  autofocus=""  />
            @if ($errors->has('telefono_proveedor'))
            <div id="telefono_proveedor-error" class="error text-danger pl-3" for="telefono_proveedor" style="display: bock;" >
                <strong>
                    {{$errors -> first('telefono_proveedor')}}
                </strong>
            </div>
         @endif
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="form-group has-primary">
            <x-jet-label for="correo_proveedor" value="{{ __('Correo Electrónico del Proveedor') }}" />
            <x-jet-input id="correo_proveedor" class="form-control" type="email" style="text-transform:uppercase;" name="correo_proveedor" minlenght="25" maxlength="50" :value="old('correo_proveedor')" autofocus=""/>
            @if ($errors->has('correo_proveedor'))
            <div id="correo_proveedor-error" class="error text-danger pl-3" for="correo_proveedor" style="display: bock;" >
                <strong>
                    {{$errors -> first('correo_proveedor')}}
                </strong>
            </div>
         @endif
            </div>
        </div>
    </div>
</div>
<div class="col-lg-12 left">
    <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 left">
            <div class="form-group has-primary">
            <x-jet-label for="rtn_proveedor" value="{{ __('RTN del Proveedor') }}" />
            <x-jet-input id="rtn_proveedor" class="form-control" type="text" style="text-transform:uppercase;" name="rtn_proveedor" minlenght="8" maxlength="15"  :value="old('rtn_proveedor')" autofocus="" />
            @if ($errors->has('rtn_proveedor'))
            <div id="rtn_proveedor-error" class="error text-danger pl-3" for="rtn_proveedor" style="display: bock;" >
                <strong>
                    {{$errors -> first('rtn_proveedor')}}
                </strong>
            </div>
         @endif
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="form-group has-primary">
            <x-jet-label for="identidad_proveedor" value="{{ __('ID del Proveedor ') }}" />
            <x-jet-input id="identidad_proveedor" class="form-control" type="text" style="text-transform:uppercase;" name="identidad_proveedor" minlenght="8" maxlength="15" :value="old('identidad_proveedor')" autofocus="" />
            @if ($errors->has('identidad_proveedor'))
            <div id="identidad_proveedor-error" class="error text-danger pl-3" for="identidad_proveedor" style="display: bock;" >
                <strong>
                    {{$errors -> first('identidad_proveedor')}}
                </strong>
            </div>
         @endif
            </div>
        </div>
    </div>
</div>
<div class="col-lg-12 left">
    <div class="row">
        <div class="col-lg-12 col-md-4 col-sm-6 col-xs-12">
            <div class="form-group has-primary">
            <x-jet-label for="direccion_proveedor" value="{{ __('Dirección del Proveedor') }}" />
            <x-jet-input id="direccion_proveedor" class="form-control" type="text" style="text-transform:uppercase;" name="direccion_proveedor" minlenght="50" maxlength="100" :value="old('direccion_proveedor')"  autofocus=""  />
            @if ($errors->has('direccion_proveedor'))
            <div id="direccion_proveedor-error" class="error text-danger pl-3" for="direccion_proveedor" style="display: bock;" >
                <strong>
                    {{$errors -> first('direccion_proveedor')}}
                </strong>
            </div>
         @endif
            </div>
        </div>
    </div>
</div>
<div class="col-lg-12 left">
    <div class="row">
        <div class="col-lg-12 col-md-4 col-sm-6 col-xs-12">
            <div class="form-group has-primary">
            <x-jet-label for="descripcion_proveedor" value="{{ __('Descripción del Proveedor') }}" />
            <x-jet-input id="descripcion_proveedor" class="form-control" type="text" style="text-transform:uppercase;" name="descripcion_proveedor" minlenght="250" maxlength="500" :value="old('descripcion_proveedor')"   autofocus="" />
            @if ($errors->has('descripcion_proveedor'))
            <div id="descripcion_proveedor-error" class="error text-danger pl-3" for="descripcion_proveedor" style="display: bock;" >
                <strong>
                    {{$errors -> first('descripcion_proveedor')}}
                </strong>
            </div>
         @endif
            </div>
        </div>
    </div>
</div>

<button type="submit" class="btn btn-success">Guardar</button>
<a href="/proveedor" class="btn btn-danger">Cancelar</a>

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
