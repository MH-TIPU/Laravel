@extends('layouts.master')

@section('content')

    <div class="col-lg-12 col-md-12 col-sm-12">

        <script>
            @if(count($errors) > 0)
            @foreach($errors->all() as $error)
                toastr.error("{{ $error }}");
            @endforeach
            @endif
        </script>

        <form action="{{route('buyer.store')}}" method="post">
            @csrf
            <div class="card">

                <div class="body">

                    <small>Create new Buyer profile</small>


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


                    <h2 class="card-inside-title">Contact Information</h2>
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="phone_no"/>
                                    <label class="form-label">Phone No</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="fax_no"/>
                                    <label class="form-label">Fax Number</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <div class="form-line">
                                    <input type="email" class="form-control" name="email"/>
                                    <label class="form-label">Email</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="contact_person"/>
                                    <label class="form-label">Contact Person</label>
                                </div>
                            </div>
                        </div>

                    </div>


                    <h2 class="card-inside-title">Additional Information</h2>

                    <div class="switch">
                        <label>OFF<input type="checkbox" onchange="myFunction()"><span class="lever"></span>ON</label>
                    </div>

                    <div class="row clearfix" id="info" style="display:none">
                        <div class="col-sm-12">
                            <div class="form-group form-float form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control"  name="add_info"/>
                                    <label class="form-label">Additional Information</label>
                                </div>
                            </div>
                           <a href="#"> <i class="zmdi zmdi-plus"> Add More</i></a>
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


<script>

    function myFunction() {
        var x = document.getElementById("info");
        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
    }

</script>