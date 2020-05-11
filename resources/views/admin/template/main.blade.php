<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Default') | Panel de Administración</title>
    <link rel="stylesheet" href={{asset ('plugins/bootstrap/css/bootstrap.css')}}>
    <link rel="stylesheet" href={{asset ('plugins/chosen/chosen.css')}}>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
@include('admin.template.partials.nav')

<section>
    @include('admin.template.partials.error')
    @include('flash::message')
    @yield('content')

</section>

    <script src="{{asset('plugins/jquery/js/jquery-3.5.0.js')}}"></script>
    <script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>
    <script src="{{asset('plugins/chosen/chosen.jquery.js')}}"></script>
</body>

@yield('js')

<footer>
    @include('admin.template.partials.footer')
</footer>
</html>
