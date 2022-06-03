<div class="card">
    <div class="card-header">
       <input wire:model= "search" class="form-control" placeholder="Ingrese el nombre de la publicación">
    </div>

    @if ($posts->count())
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th colspan="2">Acciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->name }}</td>
                        <td width= "10px">
                            <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-sm btn-primary">Editar</a>
                        </td>
                        <td  width= "10px">
                            <form action="{{ route('admin.posts.destroy', $post) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
    <div class="card-footer">
        {{ $posts->links() }}
    </div>
    @else
        <div class="card-body">
            <div class="alert alert-info">
                No hay publicaciones registradas.
            </div>
    @endif
</div>
