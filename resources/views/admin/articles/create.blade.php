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
        {!! Form::select('category_id', $categories,null,['class'=>'form-control','placeholder'=>'Seleccione una Categoria','required']) !!}

    </div>

    <div class="form-group">
        {!! Form::label('content','Contenido') !!}
        {!! Form::textarea('content',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('tags','Tags') !!}
         {!! Form::select('tag_id', $tags,null,['class'=>'form-control','multiple','required']) !!}
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
