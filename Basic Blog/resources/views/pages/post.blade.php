
@include('layout.head')


<div class="container">

    @include('layout.header')

    <div class="input-group mb-3">

            <input class="btn btn-primary" type="button" value="New" onclick="window.location='{{ url("newPost") }}'">

    </div>

    <div class="category_table">
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Post</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
            </thead>

            <tbody>
            @foreach($posts as $post)
                <tr>
                    <th scope="row">{{$post->id}}</th>
                    <td  >{{$post->post_title}}</td>

                    <td>
                        <input  value="View" type="button" onclick="window.location='{{ url('post/' . $post->id) }}'" class="btn-primary">
                    </td>

                    <td>
                        <input  value="Edit" type="button" onclick="window.location='{{ url('post/' . $post->id) }}/edit'" class="btn-primary">
                    </td>

                    <td>
                        <input  value="Delete" type="button" onclick="window.location='{{ url('post/' . $post->id) }}/delect'" class="btn-danger">
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</div>


@include('layout.footer')








