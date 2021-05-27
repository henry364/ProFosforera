@extends('adminlte::page')

@section('title', 'respaldo')

@section('content_header')
    <h1>Editar respaldo</h1>
@stop

@section('content')

<P></P>
    <p>Bienvenidos al control de sistema del respaldo de las personas de la Fosforera Centroamericana.</p>
<P></P>

<form action="/respaldo/{{$respaldo->id}}" method="post">
@csrf
@method('put')
<div class="col-lg-12 left">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 left">
            <div class="form-group has-primary">
            <x-jet-label for="nombre_respaldo" value="{{ __('Nombre del respaldo') }}" />
            <x-jet-input id="nombre_respaldo" class="form-control" type="text" style="text-transform:uppercase;" name="nombre_respaldo" maxlength="50" value="{{$respaldo->nombre_respaldo}}" required autofocus autocomplete="nombre_respaldo" />
            </div>
        </div>
    </div>
</div>
<div class="col-lg-12 left">
    <div class="row">
        <div class="col-lg-12 col-md-4 col-sm-6 col-xs-12">
            <div class="form-group has-primary">
            <x-jet-label for="descripcion_respaldo" value="{{ __('Descripción del respaldo') }}" />
            <x-jet-input id="descripcion_respaldo" class="form-control" type="text" style="text-transform:uppercase;" name="descripcion_respaldo" maxlength="50" value="{{$respaldo->descripcion_respaldo}}" required />
            </div>
        </div>
    </div>
</div>
<button type="submit" class="btn btn-success">Guardar</button>
<a href="/respaldo" class="btn btn-danger">Cancelar</a>

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