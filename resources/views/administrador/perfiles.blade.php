@extends('templates.master')
@section('contenido-principal')
<div class="container ">
    <div class="row justify-content-center">
        <div class="col-6 text-white  d-flex align-items-center justify-content-center">
            <h3>Lista de perfiles</h3>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-6 text-white">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($perfiles as $perfil)
                    <tr>
                        <td class="align-middle">{{$perfil->id}}</td>
                        <td class="align-middle">{{$perfil->nombre}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection