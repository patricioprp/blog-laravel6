@extends('admin.template.main')

@section('title','Editar Articulo ' .$article->title)

@section('content')
    {!! Form::open(['route' => ['articles.update',$article], 'method' => 'PUT'])!!}

    <div class="form-group">
        {!! Form::label('title', 'Titulo', ['class' => 'control-label']) !!}
        {!! Form::text('title', $article->title, ['class' => 'form-control','placeholder'=>'Titulo del Articulo','required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('category_id', 'Categoria') !!}
        {!! Form::select('category_id', $categories,$article->category->id,['class'=>'form-control select-category','required']) !!}

    </div>

    <div class="form-group">
        {!! Form::label('content','Contenido') !!}
        {!! Form::textarea('content',$article->content,['class'=>'form-control textarea-content']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('tags','Tags') !!}
        {!! Form::select('tags[]', $tags,$my_tags,['class'=>'form-control select-tag','multiple','required']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Actualizar y Guardar', ['class' => 'btn btn-primary']) !!}
    </div>


    {!! Form::close() !!}

@endsection

@section('js')
    <script>
        $('.select-tag').chosen({
            placeholder_text_multiple: 'Seleccione un maximo de 3 tags',
            max_selected_options: 3,
        });
        $('.select-category').chosen({
            placeholder_text_multiple:'Your text as placeholder',
        });

        $('.textarea-content').trumbowyg();
    </script>
@endsection
