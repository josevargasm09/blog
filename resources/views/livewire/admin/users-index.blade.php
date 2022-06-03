<div>
   <div class="card">
       <div class="card-header">
           {{-- Buscador de usuarios --}}
           
           <input wire:model="search" class="form-control" placeholder="Ingrese el nombre o correo del usuario">
       </div>
       @if ($users->count())
           
       <div class="card-body">
        <table class="table table-striped">
             <thead>
                  <tr>
                       <th>#</th>
                       <th>Nombre</th>
                       <th>Email</th>
                       <th></th>
                  </tr>
             </thead>

             <tbody>
                  @foreach ($users as $user)
                  <tr>
                       <td>{{ $user->id }}</td>
                       <td>{{ $user->name }}</td>
                       <td>{{ $user->email }}</td>
                       <td width="10px"><a class="btn btn-primary" href="{{route('admin.users.edit', $user)}}">Editar</a></td>
                       <td>
                         {{-- <button wire:click="edit({{ $user->id }})" class="btn btn-primary">Edit</button>
                         <button wire:click="delete({{ $user->id }})" class="btn btn-danger">Delete</button> --}}
                       </td>
                  </tr>
                  @endforeach
             </tbody>
        </table>
    </div>

      <div class="card-footer">
      {{ $users->links() }}
     </div>

        @else

        <div class="card-body">
            <div class="alert alert-light">
               <strong class="text-danger">  No hay registros.</strong>
            </div>


       @endif
      
   </div>
</div>
