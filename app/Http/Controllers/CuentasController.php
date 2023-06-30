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

class CuentasController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except(['autenticar','logout']);
    }

    public function autenticar(Request $request)
    {
        $user = $request->user;
        $password = $request->password;
        //dd($request);
        if(Auth::attempt(['user' => $user, 'password' => $password])){
            $imagenes = Imagen::all();
            return view('inicio.principal', compact('imagenes'));
        }
        return back()->withErrors([
            'user' => 'Credenciales Incorrectas',
        ])->onlyInput('user');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('home.index');
    }
    // ARTISTA
    public function publicar(){
        return view('artistas.publicar');
    }

    public function editar($id){
        $imagenes = Imagen::find($id);
        return view('artistas.editar', compact('imagenes'));
    }

    public function ver(){
        $imagenes = Imagen::all();
        return view('artistas.ver', compact('imagenes'));
    }

    public function destroy(Imagen $imagen){
        $imagen->delete();
        return redirect()->route('inicio.principal');
    }

    public function update(Request $request,$id){
        $imagenes = Imagen::find($id);
        $imagenes->titulo = $request->input('titulonuevo');
        $imagenes->save();
        return redirect()->route('artistas.verfoto');
    }
    // ADMINISTRADOR
    public function perfiles(){
        $perfiles = Perfil::all();
        return view('administrador.perfiles', compact('perfiles'));
    }

    public function cuentas(){
        $cuentas = Cuenta::all();
        return view('administrador.cuentas',compact('cuentas'));
    }

    public function destroy_cuenta($user){
        //dd($user);

        $cuenta = Cuenta::findOrFail($user);
        //dd($cuenta);
        $cuenta->Imagen()->delete();
        $cuenta->delete();
        return redirect()->route('administrador.cuentas')->with('success', 'La cuenta y las imágenes relacionadas se han eliminado correctamente.');
    }
}
