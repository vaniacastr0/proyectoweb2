@extends('templates.master')
@section('contenido-principal')
<div class="container-fluid px-0">
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
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Mi cuenta
                        </a>
                        <ul class="dropdown-menu navbar-dark bg-dark">
                            <li><a class="dropdown-item text-white" href="{{route('artistas.publicarfoto')}}">Publicar una foto</a></li>
                            <li><a class="dropdown-item text-white" href="{{route('artistas.verfoto')}}">Ver mis fotos</a></li>
                        </ul>
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
<div class="container d-flex justify-content-center mb-3">
    <div class="row">
        <div class="col-12 col-lg-6 justify-content-center">
            @foreach($imagenes as $imagen)
            <div class="card mb-3" style="width: 25rem;">
                <img src="../fotos/{{$imagen->archivo}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5>{{$imagen->titulo}}</h5>
                    <p class="card-title">{{$imagen->cuenta_user}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>


@endsection