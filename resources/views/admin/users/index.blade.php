@extends('admin.template.main')

@section('title','Lista de Usuarios')

@section('content')
    <header><center>Lista de Usuarios</center></header>

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
                        <button type="button" class="btn btn-danger">{{$user->type}}</button>
                    @else
                        <button type="button" class="btn btn-primary">{{$user->type}}</button>
                    @endif

                </td>
                <td>{{$user -> type}}</td>
                <td><a href="" class="btn btn-danger"> <a href="" class="btn btn-warning"></a> </a></div></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {!! $users -> render()!!}

        <a href="{{route('users.create')}}" class="btn btn-info float-right">Registrar Nuevo Usuario</a>

@endsection
