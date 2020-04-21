@extends('admin.template.main')
@section('title','Agregar Categoria')
@section('content')
    {!! Form::open(['route'=> 'categories.store', 'POST']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Nombre', ['class' => 'control-label']) !!}
            {!! Form::text('name',null, ['class' => 'form-control','required','placeholder' => 'Nombre de la Categoria']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}

@endsection
