@extends('adminlte::page')

@section('title', 'pedidos')

@section('content_header')
    <h1>Editar pedidos</h1>
@stop

@section('content')

<P></P>
    <p>Bienvenidos al control de sistema de los pedidos de las personas de la Fosforera Centroamericana.</p>
<P></P>

<form action="/pedido/{{$pedido->id}}" method="post">
@csrf
@method('put')
<div class="col-lg-12 left">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 left">
            <div class="form-group has-primary">
            <x-jet-label for="proveedor_pedido" value="{{ __('proveedor del pedido') }}" />
            <x-jet-input id="proveedor_pedido" class="form-control" type="text" name="proveedor_pedido" maxlength="50" value="{{$pedido->proveedor_pedido}}" required autofocus autocomplete="proveedor_pedido" />
            </div>
        </div>
<div class="col-lg-12 left">
    <div class="row">
        <div class="col-lg-12 col-md-4 col-sm-6 col-xs-12">
            <div class="form-group has-primary">
            <x-jet-label for="descripcion_pedido" value="{{ __('Descripción del pedido') }}" />
            <x-jet-input id="descripcion_pedido" class="form-control" type="text" style="text-transform:uppercase;" name="descripcion_pedido" maxlength="50" value="{{$pedido->descripcion_pedido}}"/>
            @if ($errors->has('descripcion_pedido'))
            <div id="descripcion_pedido-error" class="error text-danger pl-3" for="descripcion_pedido" style="display: bock;" >
                <strong>
                    {{$errors -> first('descripcion_pedido')}}
                </strong>
            </div>
         @endif
            </div>
        </div>
    </div>
</div>
<button type="submit" class="btn btn-success" onclick="return confirmsave()">Guardar</button>
<a href="/pedido" class="btn btn-danger" onclick="return confirmcancel()">Cancelar</a>

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