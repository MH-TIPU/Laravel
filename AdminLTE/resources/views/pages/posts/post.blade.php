@extends('layouts.master')



@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Posts</h3>

                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <div class="input-group-append">
                                <i onclick="window.location='{{ route('post.create') }}'" class="fas fa-plus btn-lg btn-info"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover">
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Category ID</th>
                            <th>Post By</th>
                        </tr>
                        @foreach($posts as $post)
                            <tr>
                                <td>{{$post->id}}</td>
                                <td>{{$post->post_title}}</td>
                                <td>{{$post->category_id}}</td>
                                <td>{{$post->post_by}}</td>
                                <td>
                                    <input  value="View" type="button" onclick="window.location='{{ url('post/' . $post->id) }}'" class="btn btn-raised btn-primary">
                                </td>
                                <td>
                                    <input type="button" value="Edit" onclick="window.location='{{url('post/'.$post->id.'/edit')}}'" class="btn btn-raised btn-warning">
                                </td>
                                <td>
                                    <form method="post" action="{{url('post/'.$post->id)}}">
                                        {{method_field("DELETE")}}
                                        @csrf
                                        <input type="submit" class="btn btn-raised btn-danger" value="Delete">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>

@endsection