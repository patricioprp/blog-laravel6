@extends('admin.template.main')

@section('title','Lista de Categorias')

@section('content')
    <header><center>Lista de Usuarios</center></header>

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
          <th scope="col">Acción</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <td>{{$category-> id}}</td>
                <td>{{$category -> name}}</td>
                <td><a href=" {{route('categories.edit', $category->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>

                    <a href=" {{ route('categories.destroy', $category->id) }}" onclick="return confirm('¿Esta seguro que desea eliminarla?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <a href="{{route('categories.create')}}" class="btn btn-info float-right">Registrar Categoria</a>

@endsection
