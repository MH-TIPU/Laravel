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


        <form action="{{route('product.store')}}" method="post">
            @csrf
            <div class="card">

                <div class="body">

                    <small>Create new Product</small>


                    <h2 class="card-inside-title">Basic Information</h2>
                    <div class="row clearfix">



                        <div class="col-sm-8">
                            <div class="form-group form-float form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="name" placeholder="Product Name"/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group form-float form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="code_sku" placeholder="Code / SKU"/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="description" placeholder="Product Description" />
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group form-float form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="hs_code" placeholder="HS Code" />
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group form-float form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="hs_code_bd" placeholder="HS Code Bd" />
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="photo" placeholder="Product Photo" />
                                </div>
                            </div>
                        </div>

                    </div>


                    <h2 class="card-inside-title">Weight Information</h2>
                    <div class="row clearfix">

                        <div class="col-sm-6">
                            <div class="form-group form-float form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="unit" placeholder="Unit"/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group form-float form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="net_weight" placeholder="New Weight"/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group form-float form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="gross_weight" placeholder="Gross Weight" />
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group form-float form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="cbm" placeholder="CBM Per Unit" />
                                </div>
                            </div>
                        </div>

                    </div>


                    <h2 class="card-inside-title">Price Information</h2>
                    <div class="row clearfix">

                        <div class="col-sm-6">
                            <div class="form-group form-float form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="cost_of product" placeholder="Cost Of Product Per Unit"/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group form-float form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="cost_of_packing" placeholder="Cost Of Packing Per Unit"/>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group form-float form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="cash_incentive" placeholder="Cash Incentive / Duty Draw Back" />
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


