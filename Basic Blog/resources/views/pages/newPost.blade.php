@include('layout.head')


<div class="container">

    @include('layout.header')

    <div class="form-group mb-3">
        <form action="post" method="post">
            @csrf

            <div class="form-group">
                <label for="post-title">Post Title</label>
                <input type="text" class="form-control" id="post-title" placeholder="Enter Post Title" name="post_title">
            </div>

            <div class="form-group">
                <label for="post-body">Post Body</label>
                <textarea class="form-control" rows="10" id="post-body" name="post_body" placeholder="Enter Post Body"></textarea>
            </div>

            <select class="form-control m-bot15" name="category_id">
                @if($categorys->count() > 0)
                    @foreach($categorys as $category)
                        <option value="{{$category->category_title}}">{{$category->category_title}}</option>
                    @endForeach
                @else
                    <option value=""> Select - Please Create Category First </option>
                @endif
            </select>

            <br>

            <button type="submit" class="btn btn-primary">Create</button>
            <input type="button" value="Cancel" class="btn btn-danger" onclick="window.location='{{ url('post')}}'">
        </form>
   </div>
</div>
@include('layout.footer')



<script>

</script>







