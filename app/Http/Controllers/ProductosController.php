<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index() {
        // dd("HOLA MUNDO");
        return view('products');
    }
}
