@extends('admin.template.main')
@section('title','Agregar Categoria')
@section('content')
    {!! Form::open(array('route' => ['categories.update',$category->id], 'method' => 'PUT')) !!}
    <div class="form-group">
        {!! Form::label('name', 'Nombre', ['class' => 'control-label']) !!}
        {!! Form::text('name',$category->name, ['class' => 'form-control','required','placeholder' => 'Nombre de la Categoria']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}

@endsection
