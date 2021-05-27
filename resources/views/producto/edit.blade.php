@extends('adminlte::page')

@section('title', 'productos')

@section('content_header')
    <h1>Editar Producto</h1>
@stop

@section('content')

<P></P>
<p>En esta parte usted puede editar el producto registrado de la Fosforera Centroamericana.</p>
<P></P>

<form action="/producto/{{$producto->id}}" method="post">
@csrf
@method('put')
<div class="col-lg-12 left">
    <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="form-group has-primary">
            <x-jet-label for="nombre_producto" value="{{ __('Nombre del producto') }}" />
            <x-jet-input id="nombre_producto" class="form-control" type="text" style="text-transform:uppercase;" name="nombre_producto" maxlength="50" value="{{$producto->nombre_producto}}" required autofocus autocomplete="nombre_producto" />
            @if ($errors->has('nombre_producto'))
            <div id="nombre_producto-error" class="error text-danger pl-3" for="nombre_producto" style="display: bock;" >
                <strong>
                    {{$errors -> first('nombre_producto')}}
                </strong>
            </div>
         @endif
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 left">
            <div class="form-group has-primary">
            <x-jet-label for="tipo_producto" value="{{ __('Tipo del Producto') }}" />

            <select name="tipo_producto" id="tipo_producto" class="form-control" maxlength="50">
            <option value="{{$producto->tipo_producto}}">{{$ntipo_producto['nombre_tipo_producto']}}</option>
            @foreach ($mtipo_productos as $mtipo_producto)
                   <option value="{{$mtipo_producto['id'] }}">{{$mtipo_producto['nombre_tipo_producto']}}</option>
            @endforeach       
             </select>

            </div>
        </div> 
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 left">
            <div class="form-group has-primary">
            <x-jet-label for="marca_producto" value="{{ __('Marca del Producto') }}" />

            <select name="marca_producto" id="marca_producto" class="form-control" maxlength="50">
            <option value="{{$producto->marca_producto}}">{{$nmarca['nombre_marca']}}</option>
            @foreach ($mmarcas as $mmarca)
                   <option value="{{$mmarca['id'] }}">{{$mmarca['nombre_marca']}}</option>
            @endforeach       
             </select>

            </div>
        </div> 
    </div>
</div>
<div class="col-lg-12 left">
    <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 left">
            <div class="form-group has-primary">
            <x-jet-label for="proveedor_producto" value="{{ __('Proveedor del Producto') }}" />

            <select name="proveedor_producto" id="proveedor_producto" class="form-control" maxlength="50">
            <option value="{{$producto->proveedor_producto}}">{{$nproveedor['nombre_proveedor']}}</option>
            @foreach ($mproveedors as $mproveedor)
                   <option value="{{$mproveedor['id'] }}">{{$mproveedor['nombre_proveedor']}}</option>
            @endforeach       
             </select>

            </div>
        </div> 
    </div>
</div>
<div class="col-lg-12 left">
    <div class="row">
        <div class="col-lg-12 col-md-4 col-sm-6 col-xs-12">
            <div class="form-group has-primary">
            <x-jet-label for="descripcion_producto" value="{{ __('Descripción del producto') }}" />
            <x-jet-input id="descripcion_producto" class="form-control" type="text" style="text-transform:uppercase;" name="descripcion_producto" maxlength="50" value="{{$producto->descripcion_producto}}"/>
            @if ($errors->has('descripcion_producto'))
            <div id="descripcion_producto-error" class="error text-danger pl-3" for="descripcion_producto" style="display: bock;" >
                <strong>
                    {{$errors -> first('descripcion_producto')}}
                </strong>
            </div>
         @endif
            </div>
        </div>
    </div>
</div>

<button type="submit" class="btn btn-success">Guardar</button> 
<a href="/producto" class="btn btn-danger">Cancelar</a>

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