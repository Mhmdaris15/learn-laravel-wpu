<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            'title' => 'Blog',
            'posts' => Post::with(['author', 'category'])->latest()->get() // Sort data start with the newest (not Post::all())
        ]);
    }

    public function show(Post $post) // Tie to the model
    {
        // $post = Post::find($post->slug);
        return view('post', [
            'title' => $post['title'],
            'post' => $post->load(['author', 'category'])
        ]);
    }

    public function category(Category $category)
    {
        return view('category', [
            'title' => $category->name,
            'posts' => $category->posts->load('author', 'category')
        ]);
    }
}
