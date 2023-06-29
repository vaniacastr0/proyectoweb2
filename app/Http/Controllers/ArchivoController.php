<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Models\Imagen;

class ArchivoController extends Controller
{
    public function post(Request $request){
        //dd($request);
        try{
            DB::beginTransaction();
            $imagenes = new Imagen;
            $user = Auth::user();
            $imagenes->titulo = $request->input('titulo');
            $imagenes->baneada = $request->baneada ?? false;
            $imagenes->motivo_ban = $request->motivo_ban ?? null;
            $imagenes->cuenta_user = $user->user;
            if($request->hasFile('foto')){
            $archivo=$request->file('foto');
            $archivo->move(public_path().'/fotos/', $archivo->getClientOriginalName());
            $imagenes->archivo=$archivo->getClientOriginalName();
            }
            $imagenes->save();
            DB::commit();
        } catch (Exception $e){
            DB::rollback();
        }

        return redirect()->route('inicio.principal'); 
    }
}
