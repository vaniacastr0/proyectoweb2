<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cuenta;
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

    public function filtrar(){
        $cuentas = Cuenta::all();
        $imagenes = Imagen::all();
        return view('cuentas.filtrar',compact(['cuentas','imagenes']));
    }

    public function fotos_filtradas(Request $request){
        //dd($request);
        $cuenta = Cuenta::find($request)->first();
        //dd($cuenta->user);
        $imagenes = Imagen::where('cuenta_user',$cuenta->user)->get();
        //dd($imagenes);
        //echo $imagenes->titulo;
        return view('cuentas.fotosfiltradas',compact(['cuenta','imagenes']));
    }

    public function registrar(Request $request){
        $cuenta = new Cuenta();
        $cuenta->user = $request->user;
        $cuenta->password = Hash::make($request->password);
        $cuenta->nombre = $request->nombre;
        $cuenta->apellido = $request->apellido;
        $cuenta->perfil_id = 2;
        $cuenta->save();
        return redirect()->route('home.index'); 
    }
}
