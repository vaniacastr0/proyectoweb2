<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/custom.css">
    <title>Login</title>
</head>

<body style="background: linear-gradient(to bottom, #222222 43%, #bb86a0 100%);">
    <div class="container-fluid min-vh-100  d-flex flex-column justify-content-center">
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2">
                <div class="row bg-white">
                    <div class="col-12 col-lg-4 d-flex flex-column justify-content-center align-items-center"
                        style="height: 25rem;">
                        <div class="pb-2 bg-white">
                            <img src="imagenes/Fotolog_Logo.svg.png" style="width: 20rem;">
                        </div>
                        <h6>Captura momentos y demuestra quien eres</h6>
                    </div>
                    <div class="col-12 col-lg-8 py-4">
                        <h4>Inicio de Sesión</h4>
                        <small>Proporcione sus credenciales para ingresar al sistema</small>
                        {{-- mensajes de error --}}
                        @if ($errors->any())
                        <div class="alert alert-warning">
                            @foreach ($errors->all() as $error)
                            {{ $error }}
                            @endforeach
                        </div>
                        @endif
                        {{-- fin mensajes de error --}}
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" action="{{route('cuentas.autenticar')}}">
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
                                    <div class="row">
                                        <div class="col d-flex text-end">
                                            <div class="mb-3 px-0 ">
                                                <button
                                                    class="btn btn-primary d-flex flex-column justify-content-center"
                                                    type="submit">Iniciar Sesión</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="row">
                                    <div class="col">
                                        <a href="{{ route('cuentas.registrarse') }}">Registrarse</a>
                                    </div>
                                </div>
                                <div class="col">
                                    <a href="{{ route('sincuenta.principal') }}">Continuar sin cuenta</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>