@extends('adminlte::page')

@section('title', 'Permisos')

@section('content_header')
    <h1>Crear nuevo Permiso</h1>
@stop

@section('content')

<div class="card">
    <div class="card-body">

            {!! Form::open(['route' => 'admin.permissions.store']) !!}

            <div class="col-lg-12 left">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group has-primary">
                            <x-jet-label for="nombre_permiso" value="{{ __('Nombre') }}" />
                            <x-jet-input id="name" class="form-control" placeholder="Ingrese el nombre del permiso" type="text" name="name"  minlenght="25" maxlength="50"  :value="old('name')"  autofocus />
                            @if ($errors->has('name'))
            <div id="nombre_permiso-error" class="error text-danger pl-3" for="nombre_permiso" style="display: bock;" >
                <strong>
                    {{$errors -> first('name')}}
                </strong>
            </div>
         @endif
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group has-primary">
                            <x-jet-label for="descripcon" value="{{ __('Descripcion') }}" />
                            <x-jet-input id="descripcion" class="form-control" placeholder="Ingrese descripción" type="text" style="text-transform:uppercase;" name="descripcion"  minlenght="25" maxlength="50" :value="old('descripcion')"  autofocus  />
                            <div id="descripcion-error" class="error text-danger pl-3" for="descripcion" style="display: bock;" >
                            @if ($errors->has('descripcion'))
            <div id="descripcion-error" class="error text-danger pl-3" for="descripcion" style="display: bock;" >
                <strong>
                    {{$errors -> first('descripcion')}}
                </strong>
            </div>
         @endif
                        </div>
                    </div>
                </div>
            </div>
                {!! Form::submit('Crear permiso', ['class'=> 'btn btn-primary']) !!}
                <a href="/admin/permissions/" class="btn btn-danger">Cancelar</a>
            {!! Form::close() !!}

    </div>
</div>


@stop


