@extends('adminlte::page')

@section('title', 'productos')

@section('content_header')
    <h1>Crear productos</h1>
@stop

@section('content')

<P></P>
    <p>Bienvenidos al control de sistema de los productos de la Fosforera Centroamericana.</p>
<P></P>

<form action="/producto" method="post">
@csrf
<div class="col-lg-12 left">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="form-group has-primary">
            <x-jet-label for="nombre_producto" value="{{ __('Nombre del producto') }}" />
            <x-jet-input id="nombre_producto" class="form-control" type="text"  name="nombre_producto" maxlength="50" :value="old('nombre_producto')"  />
            @if ($errors->has('nombre_producto'))
            <div id="nombre_marca-error" class="error text-danger pl-3" for="nombre_marca" style="display: bock;" >
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
            <select name="tipo_producto" id="tipo_producto" class="form-control" autofocus autocomplete="tipo_producto">
            <option value="">-- seleccione una categoria</option>
            @foreach ($mtipo_productos as $mtipo_producto)
                   <option value="{{$mtipo_producto['id'] }}">{{$mtipo_producto['nombre_tipo_producto']}}</option>
            @endforeach
             </select>
             @if ($errors->has('tipo_producto'))
             <div id="nombre_marca-error" class="error text-danger pl-3" for="tipo_producto" style="display: bock;" >
                 <strong>
                     {{$errors -> first('tipo_producto')}}
                 </strong>
             </div>
          @endif
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 left">
            <div class="form-group has-primary">
            <x-jet-label for="marca_producto" value="{{ __('Marca del Producto') }}"  />
            <select name="marca_producto" id="marca_producto" class="form-control"   autofocus autocomplete="marca_producto">
            <option value="">-- seleccione una categoria</option>
            @foreach ($mmarcas as $mmarca)
                   <option value="{{$mmarca['id'] }}">{{$mmarca['nombre_marca']}}</option>
            @endforeach
             </select>
             @if ($errors->has('marca_producto'))
             <div id="nombre_marca-error" class="error text-danger pl-3" for="marca_producto" style="display: bock;" >
                 <strong>
                     {{$errors -> first('marca_producto')}}
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
            <x-jet-label for="proveedor_producto" value="{{ __('Proveedor del Producto') }}"  />
            <select name="proveedor_producto" id="proveedor_producto" class="form-control" maxlength="50"  autofocus autocomplete="proveedor_producto">
            <option value="">-- seleccione una categoria</option>
            @foreach ($mproveedors as $mproveedor)
                   <option value="{{$mproveedor['id'] }}">{{$mproveedor['nombre_proveedor']}}</option>
            @endforeach
             </select>
             @if ($errors->has('proveedor_producto'))
             <div id="nombre_marca-error" class="error text-danger pl-3" for="proveedor_producto" style="display: bock;" >
                 <strong>
                     {{$errors -> first('proveedor_producto')}}
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
            <x-jet-label for="descripcion_producto" value="{{ __('Descripción del producto') }}" />
            <x-jet-input id="descripcion_producto" class="form-control" type="text"  name="descripcion_producto" maxlength="200" :value="old('descripcion_producto')"  autofocus autocomplete="descripcion_producto" />
            @if ($errors->has('descripcion_producto'))
            <div id="descripcion_productoerror" class="error text-danger pl-3" for="descripcion_producto" style="display: bock;" >
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
