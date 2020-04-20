
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Default') | Panel de Administración</title>
    <link rel="stylesheet" href={{asset ('plugins/bootstrap/css/bootstrap.css')}}>
</head>
<body>
@include('admin.template.partials.nav')

<section>

    @yield('content')

</section>

    <script src="{{asset('plugins/jquery/js/jquery-3.5.0.js')}}"></script>
    <script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>

</body>

<footer>
    @include('admin.template.partials.footer')
</footer>
</html>
