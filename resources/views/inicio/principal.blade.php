@extends('templates.master')

@section('contenido-principal')
<div class="container d-flex justify-content-center mb-3">
    <div class="row">
        <div class="col-12 col-lg-6 justify-content-center">
            @foreach($imagenes as $imagen)
            @if($imagen->baneada == 0)
            <div class="card mb-3" style="width: 25rem;">
                <img src="{{ asset('fotos/'. $imagen->archivo) }}" class="card-img-top" alt="...">
                <div class="card-body">
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