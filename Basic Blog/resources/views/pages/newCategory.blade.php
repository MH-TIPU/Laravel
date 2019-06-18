
@include('layout.head')


<div class="container">

    @include('layout.header')

    <div class="form-group mb-3">
        <form action="category" method="post">
            @csrf

            <div class="form-group">
                <label for="category-name">Category name</label>
                <input type="text" class="form-control" id="category-name" placeholder="Enter category Name" name="category_name">
            </div>

            <button type="submit" class="btn btn-primary">Create</button>
            <input type="button" value="Cancel" class="btn btn-danger" onclick="window.location='{{ url('category')}}'">

        </form>
    </div>


</div>

@include('layout.footer')








