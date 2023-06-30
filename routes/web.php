<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CuentasController;
use App\Http\Controllers\ArchivoController;
use App\Http\Controllers\RegistrarseController;
use App\Http\Controllers\SinCuentaController;

Route::get('/',[HomeController::class,'index'])->name('home.index');
Route::get('/principal',[HomeController::class,'principal'])->name('inicio.principal');
Route::post('/principal/registrar',[SinCuentaController::class,'registrar'])->name('sincuenta.registrar');
Route::get('/principal/sincuenta',[SinCuentaController::class,'sincuenta'])->name('sincuenta.principal');
Route::get('/principal/sincuenta/filtrar',[SinCuentaController::class,'filtrar'])->name('sincuenta.filtrar');
Route::post('/principal/sincuenta/filtrar',[SinCuentaController::class,'fotos_filtradas'])->name('sincuenta.fotosfiltradas');

Route::get('/principal/administradores/perfiles',[CuentasController::class,'perfiles'])->name('administrador.perfiles');
Route::get('/principal/administradores/cuentas',[CuentasController::class,'cuentas'])->name('administrador.cuentas');
Route::delete('/principal/administradores/destroy/{cuenta}',[CuentasController::class,'destroy_cuenta'])->name('administrador.destroy_cuenta');

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
