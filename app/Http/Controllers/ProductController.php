<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addProduct()
    {
        return view('product.addProduct');
    }

    public function saveProduct(Request $request)
    {
        dd($request->all());
    }
}
