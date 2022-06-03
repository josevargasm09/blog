@extends('adminlte::page')

@section('title', 'Dashboard')

@section('plugins.Sweetalert2', true)

@section('content_header')
    <h1>Crear nuevo rol</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
       {!! Form::open(['route' => ['admin.roles.store']]) !!}
       
             @include('admin.roles.partes.form')

            <div class="form-group">
                {!! Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) !!}
            </div>
        {!! Form::close() !!}
    </div>
</div>
@stop
