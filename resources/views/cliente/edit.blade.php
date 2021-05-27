@extends('adminlte::page')

@section('title', 'Clientes')

@section('content_header')
    <h1>Editar Clientes</h1>
@stop

@section('content')

<P></P>
<p>En esta parte usted puede editar el cliente registrado de la Fosforera Centroamericana.</p>
<P></P>

<form action="/cliente/{{$cliente->id}}" method="post">
@csrf
@method('put')
<div class="col-lg-12 left">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 left">
            <div class="form-group has-primary">
            <x-jet-label for="nombre_cliente" value="{{ __('Nombre Cliente') }}" />
            <x-jet-input id="nombre_cliente" class="form-control" type="text" name="nombre_cliente" maxlength="50" value="{{$cliente->nombre_cliente}}" required autofocus autocomplete="nombre_cliente" />
            @if ($errors->has('nombre_cliente'))
            <div id="nombre_cliente-error" class="error text-danger pl-3" for="nombre_cliente" style="display: bock;" >
                <strong>
                    {{$errors -> first('nombre_cliente')}}
                </strong>
            </div>
         @endif
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="form-group has-primary">
            <x-jet-label for="telefono_cliente" value="{{ __('Teléfono Cliente') }}" />
            <x-jet-input id="telefono_cliente" class="form-control" type="text" style="text-transform:uppercase;" name="telefono_cliente" maxlength="50" value="{{$cliente->telefono_cliente}}" />
            @if ($errors->has('telefono_cliente'))
            <div id="telefono_cliente-error" class="error text-danger pl-3" for="telefono_cliente" style="display: bock;" >
                <strong>
                    {{$errors -> first('telefono_cliente')}}
                </strong>
            </div>
         @endif
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="form-group has-primary">
            <x-jet-label for="correo_cliente" value="{{ __('Correo Electrónico Cliente') }}" />
            <x-jet-input id="correo_cliente" class="form-control" type="text" style="text-transform:uppercase;" name="correo_cliente" maxlength="50" value="{{$cliente->correo_cliente}}" />
            @if ($errors->has('correo_cliente'))
            <div id="correo_cliente-error" class="error text-danger pl-3" for="correo_cliente" style="display: bock;" >
                <strong>
                    {{$errors -> first('correo_cliente')}}
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
            <x-jet-label for="rtn_cliente" value="{{ __('RTN del Cliente') }}" />
            <x-jet-input id="rtn_cliente" class="form-control" type="text" style="text-transform:uppercase;" name="rtn_cliente" maxlength="50" value="{{$cliente->rtn_cliente}}" />
            @if ($errors->has('rtn_cliente'))
            <div id="rtn_cliente-error" class="error text-danger pl-3" for="rtn_cliente" style="display: bock;" >
                <strong>
                    {{$errors -> first('rtn_cliente')}}
                </strong>
            </div>
         @endif
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="form-group has-primary">
            <x-jet-label for="identidad_cliente" value="{{ __('ID del Cliente') }}" />
            <x-jet-input id="identidad_cliente" class="form-control" type="text" style="text-transform:uppercase;" name="identidad_cliente" maxlength="50" value="{{$cliente->identidad_cliente}}"/>
            @if ($errors->has('identidad_cliente'))
            <div id="identidad_cliente-error" class="error text-danger pl-3" for="identidad_cliente" style="display: bock;" >
                <strong>
                    {{$errors -> first('identidad_cliente')}}
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
            <x-jet-label for="direccion_cliente" value="{{ __('Dirección del Cliente') }}" />
            <x-jet-input id="direccion_cliente" class="form-control" type="text" style="text-transform:uppercase;" name="direccion_cliente" maxlength="50" value="{{$cliente->direccion_cliente}}" />
            @if ($errors->has('direccion_cliente'))
            <div id="direccion_cliente-error" class="error text-danger pl-3" for="direccion_cliente" style="display: bock;" >
                <strong>
                    {{$errors -> first('direccion_cliente')}}
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
            <x-jet-label for="descripcion_cliente" value="{{ __('Descripción del Cliente') }}" />
            <x-jet-input id="descripcion_cliente" class="form-control" type="text" style="text-transform:uppercase;" name="descripcion_cliente" maxlength="50" value="{{$cliente->descripcion_cliente}}"/>
            @if ($errors->has('descripcion_cliente'))
            <div id="descripcion_cliente-error" class="error text-danger pl-3" for="descripcion_cliente" style="display: bock;" >
                <strong>
                    {{$errors -> first('descripcion_cliente')}}
                </strong>
            </div>
         @endif
            </div>
        </div>
    </div>
</div>
<button type="submit" class="btn btn-success">Guardar</button>
<a href="/cliente" class="btn btn-danger">Cancelar</a>

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
