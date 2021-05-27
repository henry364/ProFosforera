@extends('adminlte::page')

@section('css')
<link href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css" rel="stylesheet">

@section('title', 'respaldo')

@section('content_header')
    <h1>Resplado y Restablacer DB</h1>
@stop

@section('content')

<P></P>
    <p>Bienvenidos a la configuracion de respaldo de la base de datos de la Fosforera Centroamericana.</p>
<P></P>



<br><br>
<div class="col-lg-12 left">
<div class="row">
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 left">
            <div class="form-group has-primary">
            <x-jet-label for="Local_respaldo" value="{{ __('LocalHost') }}" />
            <select name="Local_respaldo" id="Local_respaldo" class="form-control" maxlength="50" required autofocus autocomplete="Local_respaldo">
            <option value="">--LocalHost</option>
             </select>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12 ">
            <div class="form-group has-primary">
            <x-jet-label for="Base_respaldo" value="{{ __('Base de Datos') }}" />
            <select name="Base_respaldo" id="Base_respaldo" class="form-control" maxlength="50" required autofocus autocomplete="Base_respaldo">
            <option value="">--Base de Datos</option>
             </select>
            </div>
        </div>
        </div>
        <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="form-group has-primary">
            <x-jet-label for="directorio_respaldo" value="{{ __('Directorio') }}" />
            <x-jet-input id="directorio_respaldo" class="form-control" type="text" style="text-transform:uppercase;" name="directorio_respaldo" maxlength="50" :value="old('directorio_respaldo')" required autofocus autocomplete="directorio_respaldo" />
            </div>

        </div>

        <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 left">
            <div class="form-group has-primary">


        </div>

        </div>
        <a href="respaldo/create" class=" form-control btn btn-primary  left"  type="submit">Examinar</a>
    </div>

 </div>
<a href="respaldo/create" class="btn btn-primary" type="submit">Respaldar</a>
<a href="respaldo/create" class="btn btn-primary" type="submit">Restablecer</a>
<a href="respaldo/create" class="btn btn-primary" type="submit">Salir</a>

@foreach($respaldos as $respaldo)
            <tr>
                <td>{{$respaldo->id}}</td>
                <td>{{$respaldo->directorio_respaldo}}</td>
                <td>{{$respaldo->descripcion_respaldo}}</td>
                <td>{{$respaldo->created_at}}</td>
                <td>{{$respaldo->updated_at}}</td>
                <td>
                <form action="{{route('respaldo.destroy',$respaldo->id)}}" method="post">
                    <a href="/respaldo/{{$respaldo->id}}/edit" class="btn btn-warning btn-sm">Editar</a>
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
    $('#respaldo').DataTable();
} );
</script>

@endsection
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
