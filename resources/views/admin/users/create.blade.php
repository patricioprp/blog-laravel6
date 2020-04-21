@extends('admin.template.main')

@section('title', 'Crear Usuario')

@section('content')

    {!! Form::open(['route'=> 'users.store', 'POST']) !!}

    </p><div class="form-group"></p>
            {!! Form::label('name', 'Nombre', ['class' => 'control-label']) !!}
            {!! Form::text('name', '', ['class' => 'form-control','required','placeholder' => 'Nombre Completo']) !!}

        </div>

    <div class="form-group">
        {!! Form::label('email', 'Correo Electronico', ['class' => 'control-label']) !!}
        {!! Form::email('email', '', ['class' => 'form-control','required','placeholder' => 'example@gmail.com']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('password', 'Contraseña') !!}
        {!! Form::password('password', ['class'=>'form-control', 'placeholder'=>'Conformada por 4 digitos alfanumericos como minimo y 30 como maximo', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('type', 'Tipo') !!}
        {!! Form::select('type',[''=>'Seleccione un nivel','member'=> 'Miembro','admin'=> 'Administrador'], 'null',['class'=>'form-control','required']) !!}
    </div>

    <div class="form-group">

        {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}


@endsection
