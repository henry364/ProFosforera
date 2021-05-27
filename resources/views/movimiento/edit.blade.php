@extends('adminlte::page')

@section('title', 'movimientos')

@section('content_header')
    <h1>Editar movimientos</h1>
@stop

@section('content')

<P></P>
    <p>Bienvenidos al control de sistema de los movimientos de las personas de la Fosforera Centroamericana.</p>
<P></P>

<form action="/movimiento/{{$movimiento->id}}" method="post">
@csrf
@method('put')
<div class="col-lg-12 left">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 left">
            <div class="form-group has-primary">
            <x-jet-label for="acabado_movimiento" value="{{ __('acabado del movimiento') }}" />
            <x-jet-input id="acabado_movimiento" class="form-control" type="text" name="acabado_movimiento" maxlength="50" value="{{$movimiento->acabado_movimiento}}" autofocus="" />
            </div>
        </div>
<div class="col-lg-12 left">
    <div class="row">
        <div class="col-lg-12 col-md-4 col-sm-6 col-xs-12">
            <div class="form-group has-primary">
            <x-jet-label for="descripcion_movimiento" value="{{ __('Descripción del movimiento') }}" />
            <x-jet-input id="descripcion_movimiento" class="form-control" type="text" style="text-transform:uppercase;" name="descripcion_movimiento" maxlength="50" value="{{$movimiento->descripcion_movimiento}}"/>
            @if ($errors->has('descripcion_movimiento'))
            <div id="descripcion_movimiento-error" class="error text-danger pl-3" for="descripcion_movimiento" style="display: bock;" >
                <strong>
                    {{$errors -> first('descripcion_movimiento')}}
                </strong>
            </div>
         @endif
            </div>
        </div>
    </div>
</div>
<button type="submit" class="btn btn-success" onclick="return confirmsave()">Guardar</button>
<a href="/movimiento" class="btn btn-danger" onclick="return confirmcancel()">Cancelar</a>

</form>

<br><br>

<div class="col-lg-12 left">

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

<script type="text/javascript">
    function confirmsave()
    {
        var respuesta = confirm("estas seguro de guardar este registro");
            if (respuesta ==true)
            {
                alert("registro guardado con exito");  
                return true
              
            }
            else
            {
                return false;
            }
    }
</script>

<script type="text/javascript">
    function confirmcancel()
    {
        var respuesta = confirm("estas seguro de cancelar la edición de este registro");
            if (respuesta ==true)
            {
                alert("edición cancelada con exito, regresando a la pagina anterior");  
                return true
              
            }
            else
            {
                return false;
            }
    }
</script>

    <script> console.log('Hi!'); </script>
@stop