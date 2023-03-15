<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('posts/index')->with(['posts' => $post->getPaginateLimit()]);  
    }

    public function show(Post $post)
    {
        return viem('posts/show')->with(['posts' => $post]);
    }
}