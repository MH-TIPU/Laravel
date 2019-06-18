@include('layout.head')


<div class="container">

    @include('layout.header')

    <div class="form-group mb-3">
        <form method="post"  action="{{ url( 'post/' . $post->id) }}">
            {{method_field('patch')}}
            {{csrf_field()}}

            <div class="form-group">
                <label for="post-title">Post Title</label>
                <input type="text" class="form-control" id="post-title" value="{{$post->post_title}}" name="edit_post_title">
            </div>

            <div class="form-group">
                <label for="post-body">Post Body</label>
                <textarea class="form-control" rows="10" id="post-body"  name="edit_post_body">{{$post->post_body}}</textarea>
            </div>

            <div class="form-group">
                <label for="category-id">Category Id</label>
                <input type="text" class="form-control" id="category-id" value="{{$post->category_id}}" name="edit_category_id">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <input type="button" value="Cancel" class="btn btn-danger" onclick="window.location='{{ url('post')}}'">



        </form>
    </div>


</div>

@include('layout.footer')








