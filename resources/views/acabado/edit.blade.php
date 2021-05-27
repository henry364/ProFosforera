@extends('adminlte::page')

@section('title', 'acabados')

@section('content_header')
    <h1>Editar Producto Terminado</h1>
@stop

@section('content')

<P></P>
<p>En esta parte usted puede editar el producto terminado registrado de la Fosforera Centroamericana.</p>
<P></P>

<form action="/acabado/{{$acabado->id}}" method="post">
@csrf
@method('put')
<div class="col-lg-12 left">
    <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="form-group has-primary">
            <x-jet-label for="nombre_acabado" value="{{ __('Nombre del acabado') }}" />
            <x-jet-input id="nombre_acabado" class="form-control" type="text" style="text-transform:uppercase;" name="nombre_acabado" maxlength="50" value="{{$acabado->nombre_acabado}}"/>
            @if ($errors->has('nombre_acabado'))
            <div id="nombre_acabado-error" class="error text-danger pl-3" for="nombre_acabado" style="display: bock;" >
                <strong>
                    {{$errors -> first('nombre_acabado')}}
                </strong>
            </div>
         @endif
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 left">
            <div class="form-group has-primary">
            <x-jet-label for="tipo_acabado" value="{{ __('Tipo del acabado') }}" />

            <select name="tipo_acabado" id="tipo_acabado" class="form-control" maxlength="50">
            <option value="{{$acabado->tipo_acabado}}">{{$ntipo_producto['nombre_tipo_producto']}}</option>
            @foreach ($mtipo_productos as $mtipo_producto)
                   <option value="{{$mtipo_producto['id'] }}">{{$mtipo_producto['nombre_tipo_producto']}}</option>
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
            <x-jet-label for="descripcion_acabado" value="{{ __('Descripción del acabado') }}" />
            <x-jet-input id="descripcion_acabado" class="form-control" type="text" style="text-transform:uppercase;" name="descripcion_acabado" maxlength="50" value="{{$acabado->descripcion_acabado}}"/>
            @if ($errors->has('descripcion_acabado'))
            <div id="descripcion_acabado-error" class="error text-danger pl-3" for="descripcion_acabado" style="display: bock;" >
                <strong>
                    {{$errors -> first('descripcion_acabado')}}
                </strong>
            </div>
         @endif
            </div>
        </div>
    </div>
</div>

<button type="submit" class="btn btn-success">Guardar</button>
<a href="/acabado" class="btn btn-danger" onclick="return confirmcancel()">Cancelar</a>

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