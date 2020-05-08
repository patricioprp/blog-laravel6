@extends('admin.template.main')

@section('title', 'Editar Usuario '.$user->name)

@section('content')

{!! Form::open(array('route' => ['users.update',$user->id], 'method' => 'PUT')) !!}

</p><div class="form-group"></p>
    {!! Form::label('name', 'Nombre', ['class' => 'control-label']) !!}
    {!! Form::text('name', $user->name, ['class' => 'form-control','required','placeholder' => 'Nombre Completo']) !!}

</div>

<div class="form-group">
    {!! Form::label('email', 'Correo Electronico', ['class' => 'control-label']) !!}
    {!! Form::email('email',$user->email, ['class' => 'form-control','required','placeholder' => 'example@gmail.com']) !!}
</div>

<div class="form-group">
    {!! Form::label('type', 'Tipo') !!}
    {!! Form::select('type',['member'=> 'Miembro','admin'=> 'Administrador'],$user->type ,['class'=>'form-control','required']) !!}
</div>

<div class="form-group">

    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
</div>
{!! Form::close() !!}


@endsection
