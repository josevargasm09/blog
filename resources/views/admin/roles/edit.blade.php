@extends('adminlte::page')

@section('title', 'Dashboard')

@section('plugins.Sweetalert2', true)

@section('content_header')
    <h1>Editar rol</h1>
@stop

@section('content')
@if (session('info'))
    <div class="alert alert-success" role="alert">
        {{ session('info') }}
    </div>
    
@endif
  <div class="card">
      <div class="card-body">
          {!! Form::model($role, ['route'=>['admin.roles.update', $role], 'method'=>'PUT']) !!}

        @include('admin.roles.partes.form')

        <div class="form-group">
            {!! Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) !!}
        </div>

          {!! Form::close() !!}
      </div>
  </div>
@stop

