<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <title>Sin cuenta</title>
</head>
<body style="background: linear-gradient(to bottom, #222222 43%, #bb86a0 100%);">
    <div class="container-fluid px-0">
        <nav class="navbar navbar-expand-lg  mb-3 navbar-dark" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{route('home.index')}}">FOTOLOG</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route('cuentas.registrarse')}}">Crea Tú Cuenta</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route('sincuenta.filtrar')}}">Filtrar Fotos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route('home.index')}}">Volver al inicio</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Buscar..." aria-label="Search">
                        <button class="btn btn-outline-primary" type="submit">Buscar</button>
                    </form>
                </div>
            </div>
        </nav> 
    </div> 
    <div class="container-fluid">
        <div class="row">
            <div class="col-6  d-flex flex-column align-items-center">
                <div class="mb-3 text-white">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="{{route('sincuenta.fotosfiltradas')}}">
                                @method('POST')
                                @csrf
                                <div class="mb-3">
                                    <label for="user" class="form-label">Filtrar por cuentas</label>
                                </div>
                                <div class="mb-3">
                                    <select id="cuenta" name="cuenta" class="form-control">
                                        @foreach($cuentas as $cuenta)
                                        <option value="{{$cuenta->user}}">{{$cuenta->user}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="col d-flex text-end">
                                        <div class="mb-3 px-0 ">
                                            <button class="btn btn-primary d-flex flex-column justify-content-center"type="submit">Filtrar</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 d-flex flex-column ">
                @foreach($imagenes as $imagen)
                <div class="card mb-3" style="width: 25rem;">
                    <img src="{{ asset('fotos/'. $imagen->archivo) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5>{{$imagen->titulo}}</h5>
                        <p class="card-title">{{$imagen->cuenta_user}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</body>

</html>