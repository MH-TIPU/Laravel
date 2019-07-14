<?php

namespace App\Http\Controllers;

use App\BuyerBank;
use Illuminate\Http\Request;

class BuyerBankController extends Controller
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
     * @param  \App\BuyerBank  $buyerBank
     * @return \Illuminate\Http\Response
     */
    public function show(BuyerBank $buyerBank)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BuyerBank  $buyerBank
     * @return \Illuminate\Http\Response
     */
    public function edit(BuyerBank $buyerBank)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BuyerBank  $buyerBank
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BuyerBank $buyerBank)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BuyerBank  $buyerBank
     * @return \Illuminate\Http\Response
     */
    public function destroy(BuyerBank $buyerBank)
    {
        //
    }
}
