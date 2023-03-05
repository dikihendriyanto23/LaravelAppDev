<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "title" => "All Post",
            "posts" => Post::with(['category','author'])->latest()->get()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Post",
            "post" => $post
        ]);
    }
}
