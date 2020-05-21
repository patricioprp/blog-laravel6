<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Home') | ISMUNT</title>
    <link rel="stylesheet" href={{asset ('plugins/bootstrap/css/bootstrap.css')}}>
    <link rel="stylesheet" href={{asset ('plugins/chosen/chosen.css')}}>
    <link rel="stylesheet" href={{asset ('plugins/trumbowyg/dist/ui/trumbowyg.min.css')}}>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/f09095fa77.js" crossorigin="anonymous"></script>

</head>
<body>
<header>
    @include('front.template.partials.header')
</header>
<div class="container">
    @yield('content')
<footer>
    Todos los derechos reservados{{ date('Y') }}
    <div class="pull-right">Carlos Fernandes</div>
</footer>
</div>

<script src="{{asset('plugins/jquery/js/jquery-3.5.0.js')}}"></script>
<script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>
<script src="{{asset('plugins/chosen/chosen.jquery.js')}}"></script>
<script src="{{asset('plugins/trumbowyg/dist/trumbowyg.min.js')}}"></script>
<script src="https://kit.fontawesome.com/f09095fa77.js" crossorigin="anonymous"></script>

</body>
</html>
