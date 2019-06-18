
@include('layout.head')


<div class="container">

    @include('layout.header')

    <h6>Post Id : <span class="badge badge-secondary">{{$post->id}}</span></h6>
    <h6>Category : <span class="badge badge-secondary">{{$post->category_id}}</span></h6>
    <table class="table-hover">
        <tr>
            <td>  <input  value="Edit" type="button" onclick="window.location='{{ url('post/' . $post->id) }}/edit'" class="btn-primary">
            </td>

            <td>
                <input  value="Delete" type="button" onclick="window.location='{{ url('post/' . $post->id) }}/delect'" class="btn-danger">
            </td>
        </tr>
    </table>

    <h1 class="text-center text-success ">{{$post->post_title}}</h1>
    <br>


    <h5 class="text-lg lead">{{$post->post_body}}</h5>


</div>

<br>
<br>
<br>
<br>
@include('layout.footer')

{{--------------------------------------------------------------------------------------------------------------------------------------------------------------}}










