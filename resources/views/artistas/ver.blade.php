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
            @if($imagen->cuenta_user == Auth::user()->user)
            <div class="card mb-3" style="width: 25rem;">
                <img src="../fotos/{{$imagen->archivo}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <div class="row">
                        <div class="col-10">
                            <h5>{{$imagen->titulo}}</h5>
                        </div>
                        <div class="col-2 mb-1">
                            <a href="{{route('artistas.editarfoto', $imagen->id)}}" class="btn btn-light">
                                <i class="material-symbols-outlined">edit</i>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-10">
                            <p class="card-title">{{$imagen->cuenta_user}}</p>
                        </div>
                        <div class="modal fade" id="borrarModal{{$imagen->id}}" tabindex="-1"
                            aria-labelledby="borrarModalLabel{{$imagen->id}}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="borrarModalLabel{{$imagen->id}}">
                                            Confirmación
                                            de borrado</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form method="POST" action="{{route('artistas.destroy',$imagen->id)}}">
                                        @method('delete')
                                        @csrf
                                        <div class="modal-body">
                                            ¿Borrar la fotografia <span
                                                class="text-primary fw-bold">{{$imagen->titulo}}</span>
                                            del usuario <span
                                                class="text-primary fw-bold">{{$imagen->cuenta_user}}</span>?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light"
                                                data-bs-dismiss="modal">Cancelar</button>
                                            <button type="submit" class="btn btn-primary">Borrar fotografia</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                data-bs-target="#borrarModal{{$imagen->id}}">
                                <span class="material-symbols-outlined">delete</span>
                            </button>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection