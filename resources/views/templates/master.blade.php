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