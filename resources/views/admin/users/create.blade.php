@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear un nuevo Usuario</h1>
@stop

@section('content')

<div class="card">
    <div class="card-body">

            {!! Form::open(['route' => 'admin.users.store']) !!}

            <div class="col-lg-12 left">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group has-primary">
                            <x-jet-label for="name" value="{{ __('Nombre') }}" />
                            <x-jet-input id="name" class="form-control" placeholder="Ingrese el nombre del Usuario" type="text"  name="name" maxlength="50" :value="old('name')" autofocus autocomplete="nombre de usuario" />

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
                                    <x-jet-input id="username" class="form-control" placeholder="Ingrese Usuario" type="text"  name="username" maxlength="50" :value="old('username')"  autofocus autocomplete="username" />
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
                                name="email" maxlength="50" :value="old('email')"  />

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

                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="form-group has-primary">
                                <x-jet-label for="password" value="{{ __('Contraseña') }}" />
                                <x-jet-input id="password" class="form-control" placeholder="Ingrese contraseña" type="password"  name="password"
                                 value="{{old('password')}}"   />
                                @if ($errors->has('password'))
                                <div id="password-error" class="error text-danger pl-3" for="password" style="display: bock;" >
                                    <strong>
                                        {{$errors -> first('password')}}
                                    </strong>
                                </div>
                                @endif


                            </div>

                        </div>
                    </div>

                    <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group has-primary">
                            <x-jet-label for="password_confirmation" value="{{ __('Confirmar Contraseña') }}" />
                            <x-jet-input id="password_confirmation" class="form-control" type="password" name="password_confirmation"  placeholder="Confirmar contraseña" minlenght="8"   autocomplete="password_confirmation" />

                            @if ($errors->has('password_confirmation'))
                            <div id="name-error" class="error text-danger pl-3" for="password_confirmation" style="display: bock;" >
                                <strong>
                                    {{$errors -> first('password_confirmation')}}
                                </strong>

                            </div>
                            @endif

                        </div>
                    </div>
                </div>


                </div>
                {!! Form::submit('Guardar', ['class'=> 'btn btn-primary']) !!}
                <a href="/admin/users/" class="btn btn-danger">Cancelar</a>
            {!! Form::close() !!}

    </div>
</div>


@stop


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop


