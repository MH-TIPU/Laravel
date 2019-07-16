<?php

namespace App\Http\Controllers;

use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $products = User::find(Auth::id())->Product;
        return view('pages/products/product',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages/products/newProduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'code_sku'=> 'required',
            'name'=> 'required',
            'description'=> 'required',
            'hs_code_bd'=> 'required',
            'hs_code'=> 'required',
            'photo'=> 'required',
            'unit'=> 'required',
            'net_weight'=> 'required',
            'gross_weight'=> 'required',
            'cbm'=> 'required',
            'cost_of_product'=> 'required',
            'cost_of_packing'=> 'required',
            'cash_incentive'=> 'required',
        ]);

        $product = new Product();

        $product->code_sku= $request->code_sku;
        $product->name= $request->name;
        $product->description= $request->description;
        $product->hs_code= $request->hs_code;
        $product->hs_code_bd= $request->hs_code_bd;
        $product->photo= $request->photo;

        $product->unit= $request->unit;
        $product->net_weight= $request->net_weight;
        $product->gross_weight= $request->gross_weight;
        $product->cbm= $request->cbm;
        $product->cost_of_product= $request->cost_of_product;

        $product->cost_of_packing= $request->cost_of_packing;
        $product->cash_incentive= $request->cash_incentive;

        $product->user_id = Auth::id();
        $product->save();

        return redirect('product');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('pages/products/editProduct');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
