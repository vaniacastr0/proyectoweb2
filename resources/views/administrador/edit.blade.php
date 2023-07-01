@extends('templates.master')
@section('contenido-principal')

<body style="background: linear-gradient(to bottom, #222222 43%, #bb86a0 100%);">
    <div class="container-fluid min-vh-100  d-flex flex-column justify-content-center">
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2">
                <div class="row bg-white">
                    <div class="col-12 col-lg-8 py-4 mb-1">
                        <h4>Editar perfil de 
                            <span class="text-primary fw-bold">{{$cuenta->user}}</span>
                        </h4>
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="user" class="form-label">User</label>
                                    <input type="text" name="user" id="user" class="form-control"
                                        placeholder="{{$cuenta->user}}" disabled>
                                </div>
                                <div class="mb-3">
                                    <label for="nombre" class="form-label">Nombre</label>
                                    <input type="text" name="nombre" id="nombre" class="form-control"
                                        placeholder="{{$cuenta->nombre}}" disabled>
                                </div>
                                <div class="mb-3">
                                    <label for="apellido" class="form-label">Apellido</label>
                                    <input type="text" name="apellido" id="apellido" class="form-control"
                                        placeholder="{{$cuenta->apellido}}" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 mt-5 mb-3">
                        <small>Ingrese los datos que desee actualizar</small>
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" action="{{route('administrador.update_cuenta', $cuenta)}}">
                                    @method('POST')
                                    @csrf
                                    <div class="mb-3">
                                        <label for="nombre" class="form-label">Nombre</label>
                                        <input type="text" name="nombre" id="nombre" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="apellido" class="form-label">Apellido</label>
                                        <input type="text" name="apellido" id="apellido" class="form-control">
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
                </div>
            </div>
        </div>
    </div>
</body>
@endsection