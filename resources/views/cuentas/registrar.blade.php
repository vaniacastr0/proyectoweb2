<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <title>Registrarse</title>
</head>

<body style="background: linear-gradient(to bottom, #222222 43%, #bb86a0 100%);">
    <div class="container-fluid min-vh-100  d-flex flex-column justify-content-center">
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2">
                <div class="row bg-white">
                    <div class="col-12 col-lg-4 d-flex flex-column justify-content-center align-items-center"
                        style="height: 25rem;">
                        <div class="pb-2 bg-white">
                            <img src="../../../imagenes/Fotolog_Logo.svg.png" alt="..."style="width: 20rem;">
                        </div>
                        <h6>Captura momentos y demuestra quien eres</h6>
                    </div>
                    <div class="col-12 col-lg-8 py-4">
                        <h4>Crea una nueva cuenta</h4>
                        <small>Proporcione sus credenciales para ingresar al sistema</small>
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" action="#">
                                    @method('POST')
                                    @csrf
                                    <div class="mb-3">
                                        <label for="user" class="form-label">User</label>
                                        <input type="text" name="user" id="user" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" name="password" id="password" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="nombre" class="form-label">Nombre</label>
                                        <input type="text" name="nombre" id="nombre" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="apellido" class="form-label">Apellido</label>
                                        <input type="text" name="apellido" id="apellido" class="form-control">
                                    </div>
                                    <div class="row">
                                        <div class="col-10 d-flex text-end">
                                            <div class="mb-3 px-0 ">
                                                <button
                                                    class="btn btn-primary d-flex flex-column justify-content-center"
                                                    type="submit">Crear Cuenta</button>
                                            </div>
                                        </div>
                                        <div class="col-2 d-flex text-end">
                                            <div class="mb-3 px-0 text-end">
                                                <a href="{{route('home.index')}}" class="btn btn-primary">Volver</a>
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

</html>