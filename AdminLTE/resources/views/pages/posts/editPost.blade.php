@extends('layouts.master')

@section('content')
    <!-- Horizontal Form -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Edit Post</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal" action="{{url('post/'.$post->id)}}" method="post">
            {{method_field('Patch')}}
            @csrf

            <div class="card-body">
                <div class="form-group">
                    <label for="title" class="col-sm-2 control-label">Title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="title" name="post_title" value="{{$post->post_title}}" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="input-body" class="col-sm-2 control-label">Text Body</label>

                    <div class="col-sm-10">
                        <textarea class="form-control" rows="10" id="input-body" name="post_body">{{$post->post_body}}</textarea>
                    </div>
                </div>

                <div class="form-group col-sm-10">

                    <label for="select" class="col-sm-2 control-label">Select Category</label>
                    <select class="form-control m-bot15" name="category_id" id="select">
                        @if($categorys->count() > 0)
                            @foreach($categorys as $category)
                                <option value="{{$category->id}}">{{$category->category_name}}</option>
                            @endForeach
                        @else
                            <option value=""> Select - Please Create Category First </option>
                        @endif
                    </select>
                </div>

                <input type="hidden" name="user_name" value="{{Auth::user()->name}}">

            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
                <input type="button" value="Cancel" class="btn btn-danger" onclick="window.location='{{ url('post')}}'">
            </div>
            <!-- /.card-footer -->
        </form>
    </div>


@endsection






