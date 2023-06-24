<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home.index');
    }

    public function login(Request $request){
        $tipo = $request->tipo;
        if ($tipo === 'estudiante'){
            return redirect()->route('estudiantes.ingreso');

        } elseif ($tipo === 'admin'){
            return redirect()->route('administradores.profesores');
        } elseif ($tipo === 'profesor'){
            return redirect()->route('profesores.propuestas');
        }

    }

}
