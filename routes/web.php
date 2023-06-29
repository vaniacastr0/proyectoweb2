<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CuentasController;
use App\Http\Controllers\ArchivoController;
use App\Http\Controllers\RegistrarseController;
use App\Http\Controllers\SinCuentaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[HomeController::class,'index'])->name('home.index');
Route::get('/principal',[HomeController::class,'principal'])->name('inicio.principal');
Route::get('/principal/sincuenta',[SinCuentaController::class,'sincuenta'])->name('sincuenta.principal');

Route::post('/cuentas/login',[CuentasController::class,'autenticar'])->name('cuentas.autenticar');
Route::get('/cuentas/logout',[CuentasController::class,'logout'])->name('cuentas.logout');
Route::get('/cuentas/registrarse',[RegistrarseController::class,'registrarse'])->name('cuentas.registrarse');


Route::get('/artistas/publicar',[CuentasController::class,'publicar'])->name('artistas.publicarfoto');
Route::post('/artistas/publicar/post',[ArchivoController::class,'post'])->name('artistas.postfoto');
Route::get('/artistas/editar/{imagen}',[CuentasController::class,'editar'])->name('artistas.editarfoto');
Route::get('/artistas/ver',[CuentasController::class,'ver'])->name('artistas.verfoto');
Route::delete('/artistas/{imagen}',[CuentasController::class,'destroy'])->name('artistas.destroy');
Route::post('/artistas/{imagen}',[CuentasController::class,'update'])->name('artistas.update');

Route::resource('/artistas',CuentasController::class);
