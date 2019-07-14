@extends('layouts.master')

@section('content')

    <div class="col-lg-12 col-md-12 col-sm-12">

        @if (count($errors) > 0)

                <ul>
                    @foreach ($errors->all() as $error)
                        <div class="alert bg-red alert-dismissible" role="alert">
                            <li>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                {{ $error }}
                            </li>
                        </div>
                    @endforeach
                </ul>
        @endif

        <form action="{{route('seller.store')}}" method="post">
            @csrf
            <div class="card">

                <div class="body">

                    <small>Create new Seller profile</small>


                    <h2 class="card-inside-title">Basic Information</h2>
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="business_name"/>
                                    <label class="form-label">Business Name</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="office_add" />
                                    <label class="form-label">Office Address</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="factory_add" />
                                    <label class="form-label">Factory Address</label>
                                </div>
                            </div>
                        </div>
                    </div>


                    <h2 class="card-inside-title">Business Information</h2>
                    <div class="row clearfix">

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="bin_vat_no"/>
                                    <label class="form-label">BIN / VAT NO </label>
                                </div>
                            </div>
                        </div>


                            <div class="col-sm-8">
                                <div class="form-group form-float form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="erc_no"/>
                                        <label class="form-label">ERC No</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="date" class="date form-control" name="'erc_date">
                                    </div>
                                </div>
                            </div>

                        <div class="col-sm-8">
                            <div class="form-group form-float form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="irc_no"/>
                                    <label class="form-label">IRC No</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="date" class="date form-control" name="irc_date">
                                </div>
                            </div>
                        </div>


                    </div>


                    <h2 class="card-inside-title">Contact Information</h2>

                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control"  name="company_phone_no"/>
                                    <label class="form-label">Company Phone No</label>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control"  name="company_fax_no"/>
                                    <label class="form-label">Company Fax No</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control"  name="company_email"/>
                                    <label class="form-label">Company Email</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control"  name="company_contact_person"/>
                                    <label class="form-label">Contact Person</label>
                                </div>
                            </div>
                        </div>


                    </div>


                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <input type="submit" class="btn  btn-raised btn-success waves-effect" value="Create">
                                <button type="button" class="btn  btn-raised btn-danger waves-effect">Cancle</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </form>


    </div>

@endsection


