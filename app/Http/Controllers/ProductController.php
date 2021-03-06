<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Contracts\Session\Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $all_products = Product::paginate();
        
        return view('product.productList',['all_products'=>$all_products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return view('product.addProduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request, Product $product)
    {
 
        $product->fill($request->all())->save();

        $value = "Product Added Successfully";

        $request->session()->flash('alert-success', $value);

        return redirect()->route('product.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $single_product = Product::findOrFail($id);
        
        return view('product.editProduct',['single_product'=>$single_product]);
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request , Product $product)
    {
        //$single_product = Product::findOrFail($id);

        $product->fill($request->all())->save();
        
        $value = "Product Updated Successfully";

        $request->session()->flash('alert-success', $value);

        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Request $request)
    {
        Product::findOrFail($id)->delete();

        $value = "Product Deleted Successfully"; 

        $request->session()->flash('alert-danger', $value);

        return redirect()->route('product.index');
    }
}
