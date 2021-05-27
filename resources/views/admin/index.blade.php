@extends('adminlte::page')

@section('css')
<link href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection

@section('title', 'Usuarios')


@section('content_header')
    <h1>Lista de Usuarios</h1>
    <a href="{{route('admin.users.create')}}" class="btn btn-primary" type="submit">Crear</a>
@stop

@section('content')
@if (session('info'))
<div class="alert alert-success">
    <strong>
        {{session('info')}}
    </strong>
</div>

@endif

    @livewire('admin.users-index')
@stop



@section('js')
    <script> console.log('Hi!'); </script>
@stop




