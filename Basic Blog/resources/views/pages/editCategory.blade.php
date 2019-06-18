@include('layout.head')


<div class="container">

    @include('layout.header')

    <div class="form-group mb-3">
        <form method="post"  action="{{ url( 'category/' . $category->id) }}">
            {{method_field('patch')}}
            {{csrf_field()}}


            <div class="form-group">
                <label for="category-name">Category name</label>
                <input type="text" class="form-control" id="category-name" value="{{$category->category_title}}" name="edit_category_name">
            </div>


            <button type="submit" class="btn btn-primary">Update</button>
            <input type="button" value="Cancel" class="btn btn-danger" onclick="window.location='{{ url('category')}}'">



        </form>
    </div>


</div>

@include('layout.footer')








