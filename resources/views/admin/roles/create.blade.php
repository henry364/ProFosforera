@extends('adminlte::page')

@section('title', 'Roles')

@section('content_header')
    <h1>Crear nuevo rol</h1>
@stop

@section('content')

<div class="card">
    <div class="card-body">

            {!! Form::open(['route' => 'admin.roles.store']) !!}

                @include('admin.roles.partials.form')
                {!! Form::submit('Guardar', ['class'=> 'btn btn-primary']) !!}
                <a href="/admin/roles/" class="btn btn-danger">Cancelar</a>
            {!! Form::close() !!}

    </div>
</div>


@stop


