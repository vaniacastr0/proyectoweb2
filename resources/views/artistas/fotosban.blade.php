@extends('templates.master')

@section('hojas-estilo')
<link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
@endsection

@section('contenido-principal')
<div class="container d-flex justify-content-center mb-3">
    <div class="row">
        <div class="col-12 col-lg-6 justify-content-center">
            @foreach($imagenes as $imagen)
            @if($imagen->baneada == 1)
            <div class="card mb-3" style="width: 25rem;">
                <img src="{{ asset('fotos/'. $imagen->archivo) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="text-primary">Fotografía Baneada</h4>
                    <h6> Motivo: <span
                        class="text-primary fw-bold">{{$imagen->motivo_ban}}</span></h6>
                    <p class="card-title"></p>
                    <h5>{{$imagen->titulo}}</h5>
                    <p class="card-title">@ {{$imagen->cuenta_user}}</p>
                    
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</div>
@endsection