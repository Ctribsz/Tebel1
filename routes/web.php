<?php
//Importar Controladores
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\Login2Controller;
use App\Http\Controllers\MisionVisionController;

Route::get('/', function () {
    return view('welcome');
});


//Rutas para las visats
Route::get('inicio', [InicioController::class, 'index']);
Route::get('productos',[ProductosController::class, 'index']);
Route::get('login',[Login2Controller::class, 'index']);
Route::get('misionvision',[MisionVisionController::class, 'index']);