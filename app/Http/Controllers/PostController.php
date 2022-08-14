<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            'title' => 'Blog',
            'posts' => Post::all()
        ]);
    }

    public function show(Post $post) // Tie to the model
    {
        // $post = Post::find($post->slug);
        return view('post', [
            'title' => $post['title'],
            'post' => $post
        ]);
    }
}
