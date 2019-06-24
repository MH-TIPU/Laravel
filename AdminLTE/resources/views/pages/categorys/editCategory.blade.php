@extends('layouts.master')

@section('content')

<div class="container">
    <form method="post" action="{{url('category/'.$category->id)}}" class="col-md">
        {{method_field('Patch')}}
        {{csrf_field()}}
        <div class="form-group">
            <label><h3 class="text-primary"> Category Name</h3> </label>
            <input name="name" type="text" class="form-control text-secondary"  value="{{$category->category_name}}">
        </div>
        <div class="form-group">
            <div class="col-md-10 col-md-offset-2">
                <button type="submit" class="btn btn-primary">Create</button>
                <button type="button" onclick="window.location='{{ url('category')}}'" class="btn btn-danger">Update</button>
            </div>
        </div>
    </form>
</div>

@endsection








