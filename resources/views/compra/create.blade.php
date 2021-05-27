@extends('adminlte::page')

@section('title', 'compras')

@section('content_header')
    <h1>Crear Solicitud Compra</h1>
@stop

@section('content')

<p>En esta parte usted puede hacer nuevas solicitudes de compra de la Fosforera Centroamericana.</p>

<form action="/compra" method="post">
@csrf
<div class="col-lg-12 left">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="form-group has-primary">
            <x-jet-label for="proveedor_compra" value="{{ __('Proveedor') }}" />
            <select name="proveedor_compra" id="proveedor_compra" class="form-control" >
            <option value="">-- seleccione un proveedor</option>
            @foreach ($mproveedors as $mproveedor)
                   <option value="{{$mproveedor['id'] }}">{{$mproveedor['nombre_proveedor']}}</option>
            @endforeach
             </select>
             @if ($errors->has('proveedor_compra'))
            <div id="proveedor_compra-error" class="error text-danger pl-3" for="proveedor_compra" style="display: bock;" >
                <strong>
                    {{$errors -> first('proveedor_compra')}}
                </strong>
            </div>
         @endif
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 left">
            <div class="form-group has-primary">
            <x-jet-label for="fecha_compra" value="{{ __('Fecha Registro') }}" />
            <x-jet-input id="fecha_compra" class="form-control" type="date" style="text-transform:uppercase;" name="fecha_compra" maxlength="50" :value="old('fecha_compra')" autofocus="" />
            @if ($errors->has('fecha_compra'))
            <div id="fecha_compra-error" class="error text-danger pl-3" for="fecha_compra" style="display: bock;" >
                <strong>
                    {{$errors -> first('fecha_compra')}}
                </strong>
            </div>
         @endif

            </div>
        </div>




    </div>
</div>

<div class="card">
        <div class="card-header">
            Detalle Compra
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

                            <select name="productos[]"  class="form-control" minlenght="25" maxlength="50">
                                <option value="">-- seleccione un producto</option>
                                @foreach ($mproductos as $mproducto)
                                    <option value="{{$mproducto['id'] }}">{{$mproducto['nombre_producto']}}</option>
                             @endforeach
                            </select>


                        </td>


                    <td >
                    <x-jet-input name="cantidads[]" class="form-control" type="text" style="text-transform:uppercase;" />


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
            <x-jet-label for="descripcion_compra" value="{{ __('Descripción de la Compra') }}" />
            <x-jet-input id="descripcion_compra" name="descripcion_compra" class="form-control" type="text" style="text-transform:uppercase;"  minlenght="250" maxlength="500" :value="old('descripcion_compra') " autofocus autocomplete="descripcion_compra" />
            @if ($errors->has('descripcion_compra'))
            <div id="descripcion_compra-error" class="error text-danger pl-3" for="descripcion_compra" style="display: bock;" >
                <strong>
                    {{$errors -> first('descripcion_compra')}}
                </strong>
            </div>
         @endif
            </div>
        </div>
    </div>
</div>

<input class="btn btn-success" type="submit" value="{{ trans('Guardar') }}">
<a href="/compra" class="btn btn-danger" onclick="return confirmcancel()">Cancelar</a>

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
