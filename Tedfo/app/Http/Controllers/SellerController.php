<?php

namespace App\Http\Controllers;

use App\Seller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buyers = User::find(Auth::id())->Buyer;
        return view('pages/profile/sellers/seller',compact('buyers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages/profile/sellers/newSeller');
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
            'business_name'=> 'required',
            'office_add'=> 'required',
            'factory_add'=> 'required',
            'bin_vat_no'=> 'required',
            'erc_no'=> 'required',
            'erc_date'=> 'required',
            'irc_no'=> 'required',
            'irc_no'=> 'required',
            'irc_date'=> 'required',
            'company_phone_no'=> 'required',
            'company_fax_no'=> 'required',
            'company_email'=> 'required',
            'company_contact_person'=> 'required',
        ]);

        dd(1);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function show(Seller $seller)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function edit(Seller $seller)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Seller $seller)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seller $seller)
    {
        //
    }
}
