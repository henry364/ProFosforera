@extends('adminlte::page')


@section('title', 'Roles')

@section('content_header')
    <h1>Editar Roles</h1>
@stop

@section('content')
    @if (session('info'))
    <div class="alert alert-success">
        <strong>
            {{session('info')}}
        </strong>
    </div>
    @endif

    <div class="card">
        <div class="card-body">

        {!! Form::model($role, ['route' => ['admin.roles.update', $role],'method'=>'put']) !!}
            @include('admin.roles.partials.form')

            {!! Form::submit('Asignar rol', ['class'=>'btn btn-success']) !!}

            <a href="/admin/roles" class="btn btn-danger">Cancelar</a>
         {!! Form::close() !!}

        </div>
    </div>
@stop


