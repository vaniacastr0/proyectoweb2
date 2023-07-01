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
            <div class="card mb-3" style="width: 25rem;">
                <img src="{{ asset('fotos/'. $imagen->archivo) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5>{{$imagen->titulo}}</h5>
                            <p class="card-title">{{$imagen->cuenta_user}}</p>
                        </div>

                        <div class="modal fade" id="borrarModal{{$imagen->id}}" tabindex="-1"
                            aria-labelledby="borrarModalLabel{{$imagen->id}}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="borrarModalLabel{{$imagen->id}}">
                                            Confirmación de baneo</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form method="POST" action="{{route('administrador.update_foto', $imagen->id)}}">
                                        @method('POST')
                                        @csrf
                                        <div class="modal-body">
                                            ¿Banear la fotografria <span
                                                class="text-primary fw-bold">{{$imagen->titulo}}</span>
                                            del usuario <span
                                                class="text-primary fw-bold">{{$imagen->cuenta_user}}</span>?
                                        </div>
                                        <div class="mb-3 ">
                                            <label for="motivo_ban" class="form-label d-flex justify-content-center">¿Motivo de baneo?</label>
                                            <input type="text" name="motivo_ban" id="motivo_ban" class="form-control">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light"
                                                data-bs-dismiss="modal">Cancelar</button>
                                            <button type="submit" class="btn btn-primary">Banear fotografia</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                data-bs-target="#borrarModal{{$imagen->id}}">
                                <span class="material-symbols-outlined">
                                    visibility_off
                                </span>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection