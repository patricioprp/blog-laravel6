@extends('admin.template.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Bienvenido {{Auth::user()->name}}
                </div>
                <a href="{{route('users.index')}}" class="btn btn-info align-content-center">Menu de Adminsitracion </a>
            </div>
        </div>
    </div>
</div>
@endsection
