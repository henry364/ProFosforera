@extends('adminlte::page')

@section('title', 'Personas')

@section('content_header')
    <h1>Tabla Personas</h1>
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
                        <th scope="col">Código de Persona</th>
                        <th scope="col">Nombre de Persona</th>
                        <th scope="col">ID de Persona</th>                        
                        <th scope="col">RTN de Persona</th>
                        <th scope="col">Teléfono de Persona</th>
                        <th scope="col">Correo de Persona</th>
                        <th scope="col">Dirrección de Persona</th>
                        <th scope="col">Descripción de Persona</th>
                        <th scope="col">Código de Género</th>
                        <th scope="col">Fecha de Creación</th>
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
                <td scope="row"></td>
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