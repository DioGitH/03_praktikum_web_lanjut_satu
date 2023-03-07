<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product()
    {
        return view('product');
    }

    public function product2(){
        return view('product2');
    }

    public function product3(){
        return view('product3');
    }
}
