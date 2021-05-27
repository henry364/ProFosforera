@extends('adminlte::page')
@section('css')

@section('title', 'Usuarios')

@section('content_header')
    <h1>Editar Usuario</h1>
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
            {!! Form::model($user, ['route'=>['admin.users.update',$user],'method'=>'put']) !!}
            <div class="col-lg-12 left">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group has-primary">
                            <x-jet-label for="name" value="{{ __('Nombre') }}" />
                            <x-jet-input id="name" class="form-control" placeholder="Ingrese el nombre del Usuario" type="text"  name="name" maxlength="50" value="{{$user->name}}" autofocus autocomplete="nombre de usuario" />

                                @if ($errors->has('name'))
                                    <div id="name-error" class="error text-danger pl-3" for="name" style="display: bock;" >
                                        <strong>
                                            {{$errors -> first('name')}}
                                        </strong>
                                    </div>
                                @endif
                        </div>


                    </div>

                    <div class="col-lg-12 left">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="form-group has-primary">
                                    <x-jet-label for="username" value="{{ __('Usuario') }}" />
                                    <x-jet-input id="username" class="form-control" placeholder="Ingrese Usuario" type="text"  name="username" maxlength="50" value="{{$user->username}}"  autofocus autocomplete="username" />
                                     @if ($errors->has('username'))
                                        <div id="username-error" class="error text-danger pl-3" for="username" style="display: bock;" >
                                            <strong>
                                                {{$errors -> first('username')}}
                                            </strong>
                                        </div>
                                     @endif

                                </div>
                            </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="form-group has-primary">
                                <x-jet-label for="email" value="{{ __('Correo electronico') }}" />
                                <x-jet-input id="email" class="form-control" placeholder="Juan@example.com" type="email" style="text-transform:uppercase;"
                                name="email" maxlength="50" value="{{$user->email}}"  />

                                 @if ($errors->has('email'))
                                <div id="name-error" class="error text-danger pl-3" for="email" style="display: bock;" >
                                    <strong>
                                        {{$errors -> first('email')}}
                                    </strong>
                                </div>
                                @endif


                            </div>


                            </div>

                         </div>


                </div>


    </div>
</div>


            <h2>Listado de Roles</h2>

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


            {!! Form::submit('Guardar', ['class'=> 'btn btn-primary']) !!}
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
