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
}
