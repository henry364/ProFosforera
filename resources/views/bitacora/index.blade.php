@extends('adminlte::page')

@section('css')
<link href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css" rel="stylesheet">

@section('title', 'Bitacora')

@section('content_header')
    <h1>Tabla Bitacora</h1>
@stop

@section('content')

<P></P>
    <p>Bienvenidos al control de tabla de bitacora de la Fosforera Centroamericana.</p>
<P></P>



<div class="col-lg-12 left">
    <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="form-group has-primary">
            <x-jet-label for="Fechainicio_bitacora" value="{{ __('Fecha inicio') }}" />
            <x-jet-input id="Fechainicio_bitacora" class="form-control" type="date" style="text-transform:uppercase;" name="Fechainicio_bitacora" maxlength="50" :value="old('Fechainicio_bitacora')" required autofocus autocomplete="Fechainicio_bitacora" />
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="form-group has-primary">
            <x-jet-label for="Fechafinal_bitacora" value="{{ __('Fecha Final') }}" />
            <x-jet-input id="Fechafinal_bitacora" class="form-control" type="date" style="text-transform:uppercase;" name="Fechafinal_bitacora" maxlength="50" :value="old('Fechafinal_bitacora')" required autofocus autocomplete="Fechafinal_bitacora" />
            </div>
        </div>
        
        <div >
        <a href="bitacora/create" class="btn btn-primary" type="submit">Actualizar</a>
        
        </div>
    
        </div>
        
</div>


<br><br>

            <table id="bitacora" class="table table-striped table-bordered table-condensed table-hover" cellspacing="0" cellpadding="0" width="100%">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Fecha_Ingreso</th>
                        <th scope="col">Usuario</th>
                        <th scope="col">Pantalla</th>
                        <th scope="col">Accion</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Fecha y Hora de la Creacion</th>
                    </tr>
                </thead>
        <tbody>    
@foreach($bitacoras as $bitacora)
            <tr>
                <td>{{$bitacora->id}}</td>
                <td>{{$bitacora->Fecha_Ingreso}}</td>
                <td>{{$bitacora->Usuario}}</td>
                <td>{{$bitacora->Pantalla}}</td>
                <td>{{$bitacora->Accion}}</td>
                <td>{{$bitacora->Descripcion}}</td>
                <td>{{$bitacora->Fecha_y_Hora_de_la_Creacion}}</td>
                <td>{{$bitacora->created_at}}</td>
                <td>{{$bitacora->updated_at}}</td>
                <td>
                <form action="{{route('bitacora.destroy',$bitacora->id)}}" method="post">
                    <a href="/bitacora/{{$bitacora->id}}/edit" class="btn btn-warning btn-sm">Editar</a>
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger btn-sm">Borrar</button>
                </form>
                </td>
            </tr>
@endforeach
        </tbody>  
            </table>

</div>

@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap5.min.js"></script>

<script>
$(document).ready(function() {
    $('#bitacora').DataTable();
} );
</script>

@endsection
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop