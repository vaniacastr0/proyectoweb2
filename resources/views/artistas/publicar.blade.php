@extends('templates.master')
@section('contenido-principal')

<div class="container container-fluid min-vh-100  d-flex flex-column justify-content-center">
    <div class="row">
        <div class="col-12 col-lg mt-3">
            <div class="row bg-white">
                <div class="col-12  py-3 order-last order-lg-first">
                    <!-- formulario -->
                    <div class="d-flex justify-content-center mt-3 mb-1">
                        <h4>Sube tu fotografía</h4>
                    </div>
                    <div class="d-flex justify-content-center align-items-center mb-3 text-center">
                        <small>Proporcione sus credenciales para ingresar al Sistema. Una vez ingresada su propuesta,
                            esta entrará en estado de "Esperando Revisión", para posteriormente ser revisada por los
                            profesores y
                            entregarle una retroalimentación.
                        </small>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <form action="{{route('artistas.postfoto')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-12 col-lg">
                                        <div class="col-12 col-lg">
                                            <div class="mb-3">
                                                <label for="user" class="form-label">User</label>
                                                <input type="text" id="user" name="user" class="form-control" placeholder="{{Auth::user()->user}}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg">
                                            <div class="mb-3">
                                                <label for="titulo" class="form-label">Titulo</label>
                                                <input type="text" id="titulo" name="titulo" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg">
                                            <div class="mb-3">
                                                <label for="foto" class="form-label">Adjuntar foto</label>
                                                <input type="file" id="foto" name="foto" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3 text-end">
                                            <button class="btn btn-primary" type="submit">Enviar</button>
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
@endsection