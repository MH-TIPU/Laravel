@extends('layouts.master')

@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Categorys</h3>

            <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                    <div class="input-group-append">
                        <i onclick="window.location='{{ route("category.create") }}'" class="fas fa-plus btn-lg btn-info"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-header -->
        <table class="table table-hover">
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Name</th>
                    <th style="width: 80px"></th>
                    <th style="width: 80px"></th>
                </tr>

                @foreach($categorys as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->category_name}}</td>
                        <td>
                            <input type="button" value="Edit" onclick="window.location='{{url('category/'.$category->id.'/edit')}}'" class="btn btn-raised btn-warning">
                        </td>
                        <td><form method="post" action="{{url('category/'.$category->id)}}">
                                {{method_field("DELETE")}}
                                @csrf
                                <input type="submit" class="btn btn-raised btn-danger" value="Delete">
                            </form>
                        </td>
                    </tr>
                @endforeach


            </table>
    </div>
@endsection