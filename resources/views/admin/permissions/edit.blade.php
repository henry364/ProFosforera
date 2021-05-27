@extends('adminlte::page')

@section('title', 'Permisos')

@section('content_header')
    <h1>Editar Permission</h1>
@stop

@section('content')

@section('content')
    @if (session('info'))
    <div class="alert alert-success">
        <strong>
            {{session('info')}}
        </strong>
    </div>
    @endif

    <form action="/admin/permissions/{{$permission->id}}" method="post">
    @csrf
    @method('put')

    <div class="col-lg-12 left">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="form-group has-primary">
                    <x-jet-label for="nombre_permiso" value="{{ __('Nombre') }}" />
                    <x-jet-input id="nombre_permiso" class="form-control" placeholder="Ingrese el nombre del permiso" type="text" style="text-transform:uppercase;" name="name" maxlength="50"  value="{{$permission->name}}" autofocus="" />
                    @if ($errors->has('nombre_permiso'))
            <div id="nombre_permiso-error" class="error text-danger pl-3" for="nombre_permiso" style="display: bock;" >
                <strong>
                    {{$errors -> first('nombre_permiso')}}
                </strong>
            </div>
         @endif
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="form-group has-primary">
                    <x-jet-label for="descripcon" value="{{ __('Descripcion') }}" />
                    <x-jet-input id="descripcion" class="form-control" placeholder="Ingrese descripción" type="text" style="text-transform:uppercase;" name="descripcion" maxlength="50"  value="{{$permission->descripcion}}" autofocus="" />
                    @if ($errors->has('descripcion'))
            <div id="descripcion-error" class="error text-danger pl-3" for="descripcion" style="display: bock;" >
                <strong>
                    {{$errors -> first('descripcion')}}
                </strong>
            </div>
         @endif
                </div>
            </div>
        </div>
    </div>

        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="/admin/permissions" class="btn btn-danger">Cancelar</a>

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


