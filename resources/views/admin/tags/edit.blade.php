@extends('admin.template.main')

@section('title', 'Editar Tag '.$tag->name)

@section('content')

{!! Form::open(array('route' => ['tags.update',$tag->id], 'method' => 'PUT')) !!}

</p><div class="form-group"></p>
    {!! Form::label('name', 'Nombre', ['class' => 'control-label']) !!}
    {!! Form::text('name', $tag->name, ['class' => 'form-control','required','placeholder' => 'Nombre']) !!}

</div>

<div class="form-group">

    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
</div>
{!! Form::close() !!}


@endsection
