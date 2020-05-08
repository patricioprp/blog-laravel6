@extends('admin.template.main')

@section('title','Lista de Tags')

@section('content')
    <header><center>Lista de Tags</center></header>


    <a href="{{route('tags.create')}}" class="btn btn-info">Registrar Nuevo Tag</a>

        {!! Form::open(['route' => 'tags.index', 'method' => 'GET' , 'class' => 'navbar-form pull-right']) !!}
    <div class="input-group">
        {!! Form::text('name', null , ['class' => 'form-control','placeholder'=>'Buscar Tag...', 'aria-describedby'=>'search']) !!}
        <span class="input-group-addon" id="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>
        </span>
    </div>
    {!! Form::close() !!}

    <table class="table table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Accion</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tags as $tag)
            <tr>
                <td>{{$tag -> id}}</td>
                <td>{{$tag -> name}}</td>
                <td><a href=" {{route('tags.edit', $tag->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
                    <a href=" {{ route('tags.destroy', $tag->id) }}" onclick="return confirm('¿Esta seguro que desea eliminarlo?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {!! $tags -> render()!!}

@endsection
