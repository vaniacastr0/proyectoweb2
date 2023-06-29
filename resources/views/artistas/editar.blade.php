@extends('templates.master')
@section('contenido-principal')
<body style="background: linear-gradient(to bottom, #222222 43%, #bb86a0 100%);">
    <div class="container-fluid min-vh-100  d-flex flex-column justify-content-center">
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2">
                <div class="row bg-white">
                    <div class="col-12 col-lg-8 py-4">
                        <h4>Editar título de fotografía</h4>
                        <small>Ingrese el nuevo título para su fotografía</small>
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" action="{{ route('artistas.update', $imagenes->id) }}">
                                    @method('POST')
                                    @csrf
                                    <div class="mb-3">
                                        <label for="tituloactual" class="form-label">Título actual </label>
                                        <input type="text" name="tituloactual" id="tituloactual" class="form-control" placeholder="{{$imagenes->titulo}}" disabled>
                                    </div>
                                    <div class="mb-3">
                                        <label for="titulonuevo" class="form-label">Título nuevo</label>
                                        <input type="text" name="titulonuevo" id="titulonuevo" class="form-control">
                                    </div>
                                    <div class="row">
                                        <div class="col d-flex text-end">
                                            <div class="mb-3 px-0 ">
                                                <button
                                                    class="btn btn-primary d-flex flex-column justify-content-center"
                                                    type="submit">Editar</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 d-flex flex-column justify-content-center align-items-center"
                        style="height: 25rem;">
                        <div class="pb-2 bg-white">
                            <img src="../../../fotos/{{$imagenes->archivo}}" alt="..." style="width: 15rem;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection