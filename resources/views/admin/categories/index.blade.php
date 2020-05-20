@extends('admin.template.main')

@section('title','Lista de Categorias')

@section('content')

    <a href="{{route('categories.create')}}" class="btn btn-info">Registrar Categoria</a>

    {!! Form::open(['route' => 'categories.index', 'method' => 'GET' , 'class' => 'navbar-form pull-right']) !!}
    <div class="input-group">
        {!! Form::text('name', null , ['class' => 'form-control','placeholder'=>'Buscar Categoria...', 'aria-describedby'=>'search']) !!}
        <span class="input-group-addon" id="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>
        </span>
    </div>
    {!! Form::close() !!}

    <header><center>Lista de Categorias</center></header>

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
<div class="text-center">
{!! $categories->render() !!}
</div>

@endsection
