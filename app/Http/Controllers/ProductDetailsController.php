<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductDetailsController extends Controller
{
    public function index() {
        // dd("HOLA MUNDO");
        return view('product');
    }
}
