@extends('admin.template.main')

@section('title', 'Crear Tag')

@section('content')

{!! Form::open(['route'=> 'tags.store', 'POST']) !!}

</p><div class="form-group"></p>
    {!! Form::label('name', 'Nombre', ['class' => 'control-label']) !!}
    {!! Form::text('name', '', ['class' => 'form-control','required','placeholder' => 'Nombre']) !!}

</div>

<div class="form-group">

    {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
</div>
{!! Form::close() !!}

@endsection
