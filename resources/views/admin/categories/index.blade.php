@extends('adminlte::page')

@section('title', 'Dashboard')

@section('plugins.Sweetalert2', true)

@section('content_header')
@can('admin.categories.create')
<a class="btn btn-secondary btn-sm float-right" href="{{route('admin.categories.create')}}">Agregar categoría</a>
@endcan
    <h1 class="text-muted">Lista de categorías</h1>
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
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>

                            <td width="10px">
                               @can('admin.categories.edit')
                               <a href="{{ route('admin.categories.edit', $category) }}" class="btn btn-warning btn-sm">Editar</a>
                               @endcan
                            </td>    
                            <td width="10px">
                                @can('admin.categories.destroy')
                            
                                <form action="{{ route('admin.categories.destroy', $category) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                <button class="btn btn-danger btn-sm" onclick="deleteCategory({{ $category}})">Eliminar</button>
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

