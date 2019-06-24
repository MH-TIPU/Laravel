@extends('layouts.master')


@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="activity">
                                    <div class="post">
                                        <div class="user-block">
                                            <span class="username">
                                              <a>{{$post->post_title}}.</a>
                                            </span>
                                            <span class="description">Category id: {{$post->category_id}} <br> Created By {{$post->post_by}} At: {{$post->created_at}} </span>
                                        </div>
                                        <!-- /.user-block -->
                                        <p>
                                            {{$post->post_body}}
                                        </p>


                                        <div class="btn-group flat">
                                            <input type="button" value="Edit" onclick="window.location='{{url('post/'.$post->id.'/edit')}}'" class="btn flat btn-raised btn-warning">

                                            <form method="post" action="{{url('post/'.$post->id)}}">
                                                {{method_field("DELETE")}}
                                                @csrf
                                                <input type="submit" class="btn btn-raised btn-danger flat" value="Delete">
                                            </form>

                                            <input type="button" value="Back" class="btn btn-dark" onclick="window.location='{{ url('post')}}'">

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection