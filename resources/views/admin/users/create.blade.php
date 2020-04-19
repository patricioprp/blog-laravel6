@extends('admin.template.main')

@section('title', 'Crear Usuario')

@section('content')

    {!! Form::open(['route'=> 'users.store', 'POST']) !!}

        <div class="form-group">
            {!! Form::label('name', 'Nombre', ['class' => 'control-label']) !!}
            {!! Form::text('name', '', ['class' => 'form-control','required','placeholder' => 'Nombre Completo']) !!}

        </div>

    <div class="form-group">
        {!! Form::label('email', 'Correo Electronico', ['class' => 'control-label']) !!}
        {!! Form::email('email', '', ['class' => 'form-control','required','placeholder' => 'example@gmail.com']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('password', 'Contraseña') !!}
        {!! Form::password('password', ['class'=>'form-control', 'placeholder'=>'***********', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('type', 'Tipo') !!}
        {!! Form::select('type',[''=>'Seleccione un nivel','member'=> 'Miembro','admin'=> 'Administrador'], 'null',['class'=>'form-control']) !!}
    </div>

    <div class="form-group">

        {!! Form::submit('Registrar', ['class' => 'form-control']) !!}
        </div>
    {!! Form::close() !!}

@endsection
