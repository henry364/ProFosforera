@extends('adminlte::page')
@section('css')

@section('title', 'Usuarios')

@section('content_header')
    <h1>Asignar un Rol</h1>
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
            <p class="h5"> Nombre de Usuario</p>
            <P class="form-control">{{$user->name}}</P>

            {!! Form::model($user, ['route'=>['admin.users.update',$user],'method'=>'put']) !!}
                <h2>Listado de Roles</h2>
                <x-jet-input id="name"  type="text"  name="name"  value="{{$user->name}}" style="display: none"  />
                    <x-jet-input id="username"  type="text"  name="username"  value="{{$user->username}}" style="display: none"  />
                        <x-jet-input id="email"  type="text"  name="email"  value="{{$user->email}}" style="display: none"  />

                <div class="col-lg-12 left">
                    @foreach ($roles as $role )
                    <div>
                        <label>
                            {!! Form::checkbox('roles[]', $role->id, null, ['clase'=>'mr-1']) !!}
                            {{$role->name}}
                        </label>
                    </div>
                    @endforeach
                </div>

            {!! Form::submit('Asignar rol', ['class'=>'btn btn-success']) !!}
            <a href="/admin/users" class="btn btn-danger">Cancelar</a>
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
