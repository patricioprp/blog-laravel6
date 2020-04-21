<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand img-responsive" rel="home" href="/"><img src="https://www.lagaceta.com.ar/images/brand.svg"></a>
    <a class="navbar-nav mr-auto" href="/">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('users.index')}}">Usuarios <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{route('categories.index')}}">Categorias <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{route('users.index')}}">Imagenes <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{route('users.index')}}">Tags <span class="sr-only">(current)</span></a>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Cuenta
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Cambiar Clave</a>
                    <a class="dropdown-item" href="#">Cerrar Sesion</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Salir</a>
                </div>
            </li>
        </ul>
    </div>
         <button class="btn btn-danger type="submit">Cerrar Sesion</button>
    </div>
</nav>
