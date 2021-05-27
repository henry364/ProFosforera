@extends('adminlte::page')

@section('title', 'Almacén')

@section('content_header')
    <h1>Editar Almacén</h1>
@stop

@section('content')

<P></P>
<p>En esta parte usted puede editar el álmacen registrado de la Fosforera Centroamericana.</p>
<P></P>

<form action="/almacen/{{$almacen->id}}" method="post">
@csrf
@method('put')
<div class="col-lg-12 left">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 left">
            <div class="form-group has-primary">
            <x-jet-label for="nombre_almacen" value="{{ __('Nombre del Almacén') }}" />
            <x-jet-input id="nombre_almacen" class="form-control" type="text" style="text-transform:uppercase;" name="nombre_almacen" maxlength="50" value="{{$almacen->nombre_almacen}}" required autofocus autocomplete="nombre_almacen" />
            @if ($errors->has('nombre_almacen'))
            <div id="nombre_almacen-error" class="error text-danger pl-3" for="nombre_almacen" style="display: bock;" >
                <strong>
                    {{$errors -> first('nombre_almacen')}}
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
            <x-jet-label for="descripcion_almacen" value="{{ __('Descripción del Almacén') }}" />
            <x-jet-input id="descripcion_almacen" class="form-control" type="text" style="text-transform:uppercase;" name="descripcion_almacen" maxlength="50" value="{{$almacen->descripcion_almacen}}" required />
            @if ($errors->has('descripcion_almacen'))
            <div id="descripcion_almacen-error" class="error text-danger pl-3" for="descripcion_almacen" style="display: bock;" >
                <strong>
                    {{$errors -> first('descripcion_almacen')}}
                </strong>
            </div>
         @endif
            </div>
        </div>
    </div>
</div>
<button type="submit" class="btn btn-success">Guardar</button>
<a href="/almacen" class="btn btn-danger">Cancelar</a>

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