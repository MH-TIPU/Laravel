<?php

namespace App\Http\Controllers;

use App\SellerBank;
use Illuminate\Http\Request;

class SellerBankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd(1);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SellerBank  $sellerBank
     * @return \Illuminate\Http\Response
     */
    public function show(SellerBank $sellerBank)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SellerBank  $sellerBank
     * @return \Illuminate\Http\Response
     */
    public function edit(SellerBank $sellerBank)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SellerBank  $sellerBank
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SellerBank $sellerBank)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SellerBank  $sellerBank
     * @return \Illuminate\Http\Response
     */
    public function destroy(SellerBank $sellerBank)
    {
        //
    }
}