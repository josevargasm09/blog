<div class="form-group">
    {!!Form::label('name', 'Nombre') !!}
    {!!Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre de la publicación']) !!}

    @error('name')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!!Form::label('slug', 'Slug') !!}
    {!!Form::text('slug', null, ['class' => 'form-control', 'readonly', 'placeholder'  => 'Slug de la publicación']) !!}

    @error('slug')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!!Form::label('category_id', 'Categoría') !!}
    {!!Form::select('category_id', $categories, null, ['class' => 'form-control', 'placeholder' => 'Seleccione una categoría', ]) !!}
    @error('category_id')
        <small class="text-danger">{{ $message }}</small>
        
    @enderror
</div>

<div class="form-group">
   <p class="font-weight-bold">Etiquetas</p>
    @foreach ($tags as $tag)
              <label class="mr-2">
                {!! Form::checkbox('tags[]', $tag->id, null) !!}
                {{ $tag->name }}
              </label>
    @endforeach

    

    @error('tags')
    <br>
        <small class="text-danger">{{ $message }}</small>
        
    @enderror

</div>

{{-- Estado de la publicacion --}}

<div class="form-group">
    <p class="font-weight-bold">Estado</p>
    <label class="mr-2">
        {!! Form::radio('status', 1, true) !!} Borrador
    </label>

    <label class="mr-2">
        {!! Form::radio('status', 2) !!} Publicado
    </label>
    
    @error('status')
    <br>
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

{{-- Campos para introducir texto a la publicación  --}}
 <div class="row mb-3" >
     <div class="col">
         <div class="image-wrapper">
            @isset ($post->image)
            <img id="picture" src="{{Storage::url($post->image->url)}}" alt="">
            @else
            <img id="picture" src="https://cdn.pixabay.com/photo/2022/03/09/23/52/island-7058873_960_720.jpg" alt="">
            @endisset
         </div>
     </div>
     <div class="col">
        <div class="form-group">
            {!! Form::label('file', 'Imagen que se mostrará en la publicacion') !!}
            {!! Form::file('file', ['class' => 'form-control-file', 'accept'=> 'image/*']) !!}

            @error('file')
            <small class="text-danger">{{ $message }}</small>
             @enderror
        </div>
       
        <p>Subir imagen de contenido bueno</p>
     </div>
</div>  

<div class="form-group">
    {!!Form::label('extract', 'Extracto') !!}
    {!!Form::textarea('extract', null, ['class' => 'form-control', 'placeholder' => 'Extracto de la publicación']) !!}

    @error('extract')
        <small class="text-danger">{{ $message }}</small>
    @enderror

</div>
<div class="form-group">
    {!!Form::label('body', 'Contenido') !!}
    {!!Form::textarea('body', null, ['class' => 'form-control', 'placeholder' => 'Contenido de la publicación']) !!}

    @error('body')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>