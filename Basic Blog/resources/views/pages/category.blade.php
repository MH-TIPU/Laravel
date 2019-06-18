
@include('layout.head')


<div class="container">

    @include('layout.header')

    <div class="input-group mb-3">

        <input class="btn btn-primary" type="button" value="New" onclick="window.location='{{ url("newCategory") }}'">

    </div>

    <div class="category_table">
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
            </thead>

            <tbody>
            @foreach($categorys as $category)
                <tr>
                    <th scope="row">{{$category->id}}</th>
                    <td  >{{$category->category_title}}</td>

                    <td>
                        <input  value="Edit" type="button" onclick="window.location='{{ url('category/' . $category->id) }}/edit'" class="btn-primary">
                    </td>

                    <td>
                        <input  value="Delete" type="button" onclick="window.location='{{ url('category/' . $category->id) }}/delect'" class="btn-danger">
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>


</div>

@include('layout.footer')








