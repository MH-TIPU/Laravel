@extends('layouts.master')

@section('content')

    <div class="col-lg-12 col-md-12 col-sm-12">

        @if (count($errors) > 0)

            <ul>
                @foreach ($errors->all() as $error)
                    <div class="alert bg-red alert-dismissible" role="alertdialog">
                        <li>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            {{ $error }}
                        </li>
                    </div>
                @endforeach
            </ul>
        @endif

        <form action="{{route('shipper.store')}}" method="post">
            @csrf
            <div class="card">

                <div class="body">

                    <small>Create new Seller profile</small>


                    <h2 class="card-inside-title">Basic Information</h2>
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="business_name" placeholder="Business Name" required/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="office_add" placeholder="Office Address" required/>
                                </div>
                            </div>


                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="factory_add" placeholder="Factory Address" required/>
                                </div>
                            </div>
                        </div>
                    </div>


                    <h2 class="card-inside-title">Business Information</h2>
                    <div class="row clearfix">

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="bin_vat_no" placeholder="BIN / VAT NO " required/>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-8">
                            <div class="form-group form-float form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="erc_no" placeholder="ERC No" required/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="date" class="date form-control" name="ercDate" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-8">
                            <div class="form-group form-float form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="irc_no" placeholder="IRC No" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="date" class="date form-control" name="irc_date" required/>
                                </div>
                            </div>
                        </div>


                    </div>


                    <h2 class="card-inside-title">Contact Information</h2>

                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control"  name="company_phone_no" placeholder="Company Phone No" required/>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control"  name="company_fax_no" placeholder="Company Fax No" required/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control"  name="company_email" placeholder="Company Email" required/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control"  name="company_contact_person" placeholder="Contact Person" required/>
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


