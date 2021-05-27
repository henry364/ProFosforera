@extends('adminlte::page')

@section('title', 'pedidos')

@section('content_header')
    <h1>Crear Solicitud Pedido</h1>
@stop

@section('content')

<p>En esta parte usted puede hacer nuevas solicitudes de pedido de la Fosforera Centroamericana.</p>


<form action="/pedido" method="post">
@csrf
<div class="col-lg-12 left">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="form-group has-primary">
            <x-jet-label for="cliente_pedido" value="{{ __('Cliente') }}" />
            <select name="cliente_pedido" id="cliente_pedido" class="form-control" maxlength="50">
            <option value="">-- seleccione un cliente </option>
            @foreach ($mclientes as $mcliente)
                   <option value="{{$mcliente['id'] }}">{{$mcliente['nombre_cliente']}}</option>
            @endforeach
             </select>
             @if ($errors->has('cliente_pedido'))
            <div id="cliente_pedido-error" class="error text-danger pl-3" for="cliente_pedido" style="display: bock;" >
                <strong>
                    {{$errors -> first('cliente_pedido')}}
                </strong>
            </div>
         @endif
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 left">
            <div class="form-group has-primary">
            <x-jet-label for="fecha_pedido" value="{{ __('Fecha Registro') }}" />
            <x-jet-input id="fecha_pedido" class="form-control" type="date" style="text-transform:uppercase;" name="fecha_pedido" maxlength="50" :value="old('fecha_pedido')" autofocus="" />
            @if ($errors->has('fecha_pedido'))
            <div id="fecha_pedido-error" class="error text-danger pl-3" for="fecha_pedido" style="display: bock;" >
                <strong>
                    {{$errors -> first('fecha_pedido')}}
                </strong>
            </div>
         @endif
            </div>
        </div>
    </div>
</div>

<div class="card">
        <div class="card-header">
            Detalle Pedido
        </div>

        <div class="card-body">
            <table class="table" id="productos_table">
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Cantidad</th>
                    </tr>
                </thead>
                <tbody>
                    <tr id="producto0">
                        <td>
                            <select name="productos[]" class="form-control" maxlength="50">
                                <option value="">-- seleccione un producto</option>
                                @foreach ($mproductos as $mproducto)
                                    <option value="{{$mproducto['id'] }}">{{$mproducto['nombre_producto']}}</option>
                                @endforeach
                            </select>


                        </td>
                    <td>
                    <x-jet-input name="cantidads[]" class="form-control" type="text" style="text-transform:uppercase;"  maxlength="50"/>

                </td>


                    </tr>
                    <tr id="producto1"></tr>
                </tbody>
            </table>

            <div class="row">
                <div class="col-md-12">
                    <button id="add_row" class="btn btn-info pull-left">Agregar</button>
                    <button id='delete_row' class="pull-right btn btn-danger">Eliminar</button>
                </div>
            </div>
        </div>
    </div>
    <div>
    </div>

<div class="col-lg-12 left">
    <div class="row">
        <div class="col-lg-12 col-md-4 col-sm-6 col-xs-12">
        <div class="form-group has-primary">
            <x-jet-label for="descripcion_pedido" value="{{ __('Descripción del Pedido') }}" />
            <x-jet-input id="descripcion_pedido" name="descripcion_pedido" class="form-control" type="text" style="text-transform:uppercase;"  minlenght="250"  maxlength="500" :value="old('descripcion_pedido') " autofocus autocomplete="descripcion_pedido"/>
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

<input class="btn btn-success" type="submit" value="{{ trans('Guardar') }}">
<a href="/pedido" class="btn btn-danger" onclick="return confirmcancel()">Cancelar</a>

</form>

<br><br>

<div class="col-lg-12 left">

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="{{asset('vendor/jquery/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('vendor/jquery/fosforera_centroamericana.js')}}"></script>
    <script> console.log('Hi!'); </script>

    <script>
    $(document).ready(function(){
    let row_number = 1;
    $("#add_row").click(function(e){
      e.preventDefault();
      let new_row_number = row_number - 1;
      $('#producto' + row_number).html($('#producto' + new_row_number).html()).find('td:first-child');
      $('#productos_table').append('<tr id="producto' + (row_number + 1) + '"></tr>');
      row_number++;
    });

    $("#delete_row").click(function(e){
      e.preventDefault();
      if(row_number > 1){
        $("#producto" + (row_number - 1)).html('');
        row_number--;
      }
    });
  });
    </script>

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
        var respuesta = confirm("estas seguro de cancelar la creación de este registro");
            if (respuesta ==true)
            {
                alert("registro cancelado con exito, regresando a la pagina anterior");
                return true

            }
            else
            {
                return false;
            }
    }
</script>

@stop
