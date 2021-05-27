@extends('adminlte::page')

@section('title', 'Tipo de Productos')

@section('content_header')
    <h1>Editar Tipo de Producto</h1>
@stop

@section('content')

<P></P>
<p>En esta parte usted puede editar el tipo de producto registrado de la Fosforera Centroamericana.</p>
<P></P>

<form action="/tipo_producto/{{$tipo_producto->id}}" method="post">
@csrf
@method('put')
<div class="col-lg-12 left">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 left">
            <div class="form-group has-primary">
            <x-jet-label for="nombre_tipo_producto" value="{{ __('Nombre del Tipo de Productos') }}" />
            <x-jet-input id="nombre_tipo_producto" class="form-control" type="text" style="text-transform:uppercase;" name="nombre_tipo_producto" maxlength="50" value="{{$tipo_producto->nombre_tipo_producto}}" autofocus autocomplete="nombre_tipo_producto" />

                @if ($errors->has('nombre_tipo_producto'))
                <div id="username-error" class="error text-danger pl-3" for="username" style="display: bock;" >
                    <strong>
                        {{$errors -> first('nombre_tipo_producto')}}
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
            <x-jet-label for="descripcion_tipo_producto" value="{{ __('Descripción del Tipo de Productos') }}" />
            <x-jet-input id="descripcion_tipo_producto" class="form-control" type="text" style="text-transform:uppercase;" name="descripcion_tipo_producto" maxlength="50" value="{{$tipo_producto->descripcion_tipo_producto}}" />

                @if ($errors->has('descripcion_tipo_producto'))
                <div id="username-error" class="error text-danger pl-3" for="username" style="display: bock;" >
                    <strong>
                        {{$errors -> first('descripcion_tipo_producto')}}
                    </strong>
                </div>
             @endif



            </div>
        </div>
    </div>
</div>
<button type="submit" class="btn btn-success">Guardar</button>
<a href="/tipo_producto" class="btn btn-danger">Cancelar</a>

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
