<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index()
    {
        $categorys = Category::all();
        $posts = Post::all();
        return view('pages/posts/post', compact('posts','categorys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorys = Category::all();
        return view('pages/posts/newPost',compact('categorys'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'post_title' => 'required',
            'post_body' => 'required',
            'category_id' => 'required',
        ]);

        $post = new Post();

        $post->post_title = $request->post_title;
        $post->post_body = $request->post_body;
        $post->category_id = $request->category_id;
        $post->post_by = $request->user_name;
        $post->save();
        return redirect('post');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('pages.posts.showPost',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $categorys = Category::all();
        return view('pages.posts.editPost', compact('post','categorys'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'post_title' => 'required',
            'post_body' => 'required',
            'category_id' => 'required',
        ]);
        $post = Post::find($id);
        $post->post_title = $request->post_title;
        $post->post_body = $request->post_body;
        $post->category_id = $request->category_id;
        $post->post_by = $request->user_name;
        $post->save();
        return redirect('post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::find($id)->delete();
        return redirect(('post'));
    }
}
