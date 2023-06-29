<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imagen;


class HomeController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except(['index']);
    }

    public function index(){
        return view('home.index');
    }

    public function principal(){
        $imagenes = Imagen::all();
        return view('inicio.principal', compact('imagenes'));
    }

}
