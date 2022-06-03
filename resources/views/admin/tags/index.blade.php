@extends('adminlte::page')

@section('title', 'Dashboard')

@section('plugins.Sweetalert2', true)

@section('content_header')

   @can('admin.tags.create')
   <a class="btn btn-secondary btn-sm float-right" href="{{route('admin.tags.create')}}">Nueva etiqueta</a>
   @endcan
    <h1 class="text-muted">Mostar lista de etiquetas</h1>
@stop
@section('content')
   <div class="card">
       <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th colspan="2"></th>
                </tr>
            </thead>

            <tbody>
                @foreach ($tags as $tag)
                    <tr>
                        <td >{{ $tag->id }}</td>
                        <td>{{ $tag->name }}</td>

                        <td width="10px">
                           @can('admin.tags.edit')
                           <a href="{{ route('admin.tags.edit', $tag) }}" class="btn btn-warning btn-sm">Editar</a>
                           @endcan
                        </td>    
                        <td width="10px">
                            @can('admin.tags.destroy')
                            <form action="{{ route('admin.tags.destroy', $tag) }}" method="POST">
                                @csrf
                                @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="deleteCategory({{ $tag}})">Eliminar</button>
                            </form>
                            @endcan
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
       </div>
   </div>
@stop
