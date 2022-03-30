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
}
