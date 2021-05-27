@extends('adminlte::page')

@section('title', 'Marca')

@section('content_header')
    <h1>Crear Marca de Producto</h1>
@stop

@section('content')

<P></P>
<p>En esta parte usted puede registrar nuevas marcas de productos de la Fosforera Centroamericana.</p>
<P></P>

<form action="/marca" method="post">
@csrf
<div class="col-lg-12 left">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 left">
            <div class="form-group has-primary">
            <x-jet-label for="nombre_marca" value="{{ __('Nombre de Marca de Producto') }}" />
            <x-jet-input id="nombre_marca" class="form-control" type="text" name="nombre_marca" minlenght="25" maxlength="50" :value="old('nombre_marca')"  autofocus/>

            @if ($errors->has('nombre_marca'))
            <div id="nombre_marca-error" class="error text-danger pl-3" for="nombre_marca" style="display: bock;" >
                <strong>
                    {{$errors -> first('nombre_marca')}}
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
            <x-jet-label for="descripcion_marca" value="{{ __('Descripción de Marca de Producto') }}" />
            <x-jet-input id="descripcion_marca" class="form-control" type="text" style="text-transform:uppercase;" name="descripcion_marca" minlenght="250" maxlength="500" :value="old('descripcion_marca')" autofocus autocomplete="descripcion_marca"/>
            @if ($errors->has('descripcion_marca'))
            <div id="username-error" class="error text-danger pl-3" for="username" style="display: bock;" >
                <strong>
                    {{$errors -> first('descripcion_marca')}}
                </strong>
            </div>
         @endif
            </div>
        </div>
    </div>
</div>

<button type="submit" class="btn btn-success">Guardar</button>
<a href="/marca" class="btn btn-danger">Cancelar</a>

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
