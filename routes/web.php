<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\ProductosController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('inicio', [InicioController::class, 'index']);
Route::get('productos',[ProductosController::class, 'index']);
Route::get('product', [ProductDetailsController::class, 'index']);

