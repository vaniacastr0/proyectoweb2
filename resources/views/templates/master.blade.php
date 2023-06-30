@php
$perfil_id = [1 => 'Administrador',2=>'Artista'];
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    @yield('hojas-estilo')
    <title>Home</title>
</head>

<body style="background: linear-gradient(to bottom, #222222 43%, #bb86a0 100%);">
    <!-- barra usuario -->
    <div class="container-fluid">
        <div class="row bg-dark text-white">
            <div class="col-8">
                Bienvenido <span class="fw-bold">{{Auth::user()->user}}</span>[{{Auth::user()->perfil->nombre}}]
            </div>
            <div class="col-3 text-end d-none d-lg-block">
                {{-- Último inicio de sesión: 01/04/2023 a las 18:34 --}}
            </div>
            <div class="col-1 text-end d-none d-lg-block">
                <a href="{{route('cuentas.logout')}}" class="text-white">Cerrar Sesión</a>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg  mb-3 navbar-dark" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">FOTOLOG</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('cuentas.registrarse')}}">Crea Cuenta</a>
                    </li>
                    @if (Auth::user()->perfil->nombre == 'Artista')
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Mi cuenta
                        </a>
                        <ul class="dropdown-menu navbar-dark bg-dark">
                            <li><a class="dropdown-item text-white" href="{{route('artistas.publicarfoto')}}">Publicar una foto</a></li>
                            <li><a class="dropdown-item text-white" href="{{route('artistas.verfoto')}}">Ver mis fotos</a></li>
                            <li><a class="dropdown-item text-white" href="#">Ver mis fotos baneadas</a></li>
                        </ul>
                    </li>
                    @endif
                    @if (Auth::user()->perfil->nombre == 'Administrador')
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Opciones
                        </a>
                        <ul class="dropdown-menu navbar-dark bg-dark">
                            <li><a class="dropdown-item text-white" href="{{route('administrador.perfiles')}}">Listar perfiles</a></li>
                            <li><a class="dropdown-item text-white" href="{{route('administrador.cuentas')}}">Gestionar cuentas</a></li>
                            <li><a class="dropdown-item text-white" href="#">Banear/Desbanear fotos</a></li>
                        </ul>
                    </li>
                    @endif
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar..." aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- contenido principal -->
    <div class="container-fluid min-vh-100">
        @yield('contenido-principal')
    </div>

    @yield('script-referencias')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    @yield('script-manual')
</body>

</html>