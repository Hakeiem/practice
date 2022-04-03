<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index() {
        $posts = Post::all();
        return view('post.index', ['posts'=>$posts]);
        //return 'hello';
    }

    public function show($id) {
        $post = Post::find($id);
        // return view('post.showPost')->with('post', $post);
        return view('post.showPost', ['post'=>$post]);
    }

    public function create() {
        $post = Post::all();
        return view('post.createPost', ['post'=>$post]);
    }

    public function store(Request $request) {
        Post::create($request->all());
        return redirect('/posts');
    }

    public function edit($id) {
        $post = Post::find($id);
        return view('post.editPost', ['post'=>$post]);
    }

    public function update(Request $request, $id) {
        //Post::update($request->all());
        $post = Post::where('id', '=', $id)->first();
        $post->update($request->all());
        return redirect('/posts');
    }

    public function destory($id) {
        $post = Post::findOrfail($id);
        $post->delete();
        $request->session()->flash('flash_message', 'Post successfully deleted!');
        return redirect('post.index');
    }
}
