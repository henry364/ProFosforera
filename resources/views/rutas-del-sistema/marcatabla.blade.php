@extends('adminlte::page')

@section('title', 'Marcas')

@section('content_header')
    <h1>Tabla de Marcas</h1>
@stop

@section('content')

<P></P>
    <p>Bienvenidos al control de tabla del género de las personas de la Fosforera Centroamericana.</p>
<P></P>

<br><br>


<div id="VerListado" class="table-responsive">
            <table id="tblSucursal" class="table table-striped table-bordered table-condensed table-hover" cellspacing="0" cellpadding="0" width="100%">
                <thead>
                    <tr>
                        <th scope="col">Código de la Marca</th>
                        <th scope="col">Nombre de la Marca</th>
                        <th scope="col">Descripción de la Marca</th>
                        <th scope="col">Fecha de Registro</th>
                        <th scope="col">Fecha de Modificación</th>
                        <th scope="col">Acción de la Columna</th>
                    </tr>
                </thead>
        <tbody>    

            <tr>
                <td scope="row"></td>
                <td scope="row"></td>
                <td scope="row"></td>
                <td scope="row"></td>
                <td scope="row"></td>
                <td scope="row">
                    <a class="btn btn-warning btn-sm">Modificar</a>
                        <form class="line"></form><br>
                    <a class="btn btn-danger btn-sm">Eliminar</a>
                </td>
            </tr>

        </tbody>  
            </table>
        </div>


<div class="col-lg-12 left">

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop