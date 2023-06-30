@extends('templates.master')

@section('hojas-estilo')
<link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
@endsection

@section('contenido-principal')
<div class="container ">
    <div class="row justify-content-center">
        <div class="col-6 text-white  d-flex align-items-center justify-content-center">
            <h3>Gestión de cuentas</h3>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-6 text-white">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>N</th>
                        <th>User</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                        <th>Agregar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cuentas as $index => $cuenta)
                    <tr>
                        <td class="align-middle">{{$index+1}}</td>
                        <td class="align-middle">{{$cuenta->user}}</td>
                        <td class="align-middle">{{$cuenta->nombre}}</td>
                        <td class="align-middle">{{$cuenta->apellido}}</td>
                        <td class="align-middle">editar</td>
                        <td class="align-middle">
                            <div class="modal fade" id="borrarModal{{$cuenta->user}}" tabindex="-1"
                                aria-labelledby="borrarModalLabel{{$cuenta->user}}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="borrarModalLabel{{$cuenta->user}}">
                                                Confirmación de borrado</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form method="POST" action="{{route('administrador.destroy_cuenta', $cuenta->user)}}">
                                            @method('delete')
                                            @csrf
                                            @if($cuenta->perfil_id == 2)
                                            <div class="modal-body">
                                                ¿Borrar el usuario <span
                                                    class="text-primary fw-bold">{{$cuenta->user}}</span>?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light"
                                                    data-bs-dismiss="modal">Cancelar</button>
                                                <button type="submit" class="btn btn-primary">Borrar cuenta</button>
                                            </div>
                                            @endif
                                            @if ($cuenta->perfil_id == 1)
                                            <div class="moda-body">
                                                <span>    No es posible borrarse a si mismo</span>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary"
                                                    data-bs-dismiss="modal">Cancelar</button>
                                            </div>
                                            @endif
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#borrarModal{{$cuenta->user}}">
                                    <span class="material-symbols-outlined">delete</span>
                                </button>
                            </div>
                        </td>
                        <td class="align-middle">agregar</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection