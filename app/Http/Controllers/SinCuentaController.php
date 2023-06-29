<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cuentas;
use App\Models\Perfil;
use App\Models\Imagen;
use App\Http\Requests\CuentasRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Gate;

class SinCuentaController extends Controller
{
    public function sincuenta(){
        $imagenes = Imagen::all();
        return view('cuentas.sincuenta',compact('imagenes'));
    }
}
