@extends('admin.template.main')

@section('title','Agregar Articulo')

@section('content')
    {!! Form::open(['route' => 'articles.store', 'method' => 'POST','files'=>true])!!}

    <div class="form-group">
        {!! Form::label('title', 'Titulo', ['class' => 'control-label']) !!}
        {!! Form::text('title', null, ['class' => 'form-control','placeholder'=>'Titulo del Articulo','required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('category_id', 'Categoria') !!}
        {!! Form::select('category_id', $categories,null,['class'=>'form-control select-category','placeholder'=>'Seleccione una Categoria','required']) !!}

    </div>

    <div class="form-group">
        {!! Form::label('content','Contenido') !!}
        {!! Form::textarea('content',null,['class'=>'form-control textarea-content']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('tags','Tags') !!}
         {!! Form::select('tags[]', $tags,null,['class'=>'form-control select-tag','multiple','required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('image','Imagen') !!}
        {!! Form::file('image') !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
    </div>


    {!! Form::close() !!}

@endsection

@section('js')
<script>
    $('.select-tag').chosen({
        placeholder_text_multiple: 'Seleccione un maximo de 3 tags',
        max_selected_options: 3,
        });
    $('.select-category').chosen();

    $('.textarea-content').trumbowyg();
</script>
@endsection

