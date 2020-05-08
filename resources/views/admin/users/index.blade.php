@extends('admin.template.main')

@section('title','Lista de Usuarios')

@section('content')
    <header><center>Lista de Usuarios</center></header>

    <a href="{{route('users.create')}}" class="btn btn-info">Registrar Nuevo Usuario</a>

    {!! Form::open(['route' => 'users.index', 'method' => 'GET' , 'class' => 'navbar-form pull-right']) !!}
    <div class="input-group">
        {!! Form::text('name', null , ['class' => 'form-control','placeholder'=>'Buscar Usuario...', 'aria-describedby'=>'search']) !!}
        <span class="input-group-addon" id="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>
        </span>
    </div>
    {!! Form::close() !!}

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Correo Electronico</th>
            <th scope="col">Tipo</th>
            <th scope="col">Acción</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{$user -> id}}</td>
                <td>{{$user -> name}}</td>
                <td>{{$user -> email}}
                <td>
                    @if ($user->type == "admin")
                        <span class="label label-danger"> {{$user->type}}</span>
                    @else
                        <span class="label label-primary"> {{$user->type}}</span>
                    @endif
                </td>
                <td><a href=" {{route('users.edit', $user->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>

                    <a href=" {{ route('users.destroy', $user->id) }}" onclick="return confirm('¿Esta seguro que desea eliminarlo?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {!! $users -> render()!!}

@endsection
