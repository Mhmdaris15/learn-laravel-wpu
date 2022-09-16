<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;


class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.posts.index', [
            'title' => 'Post Dashboard',
            'posts' => Post::with(['author', 'category'])->latest()->where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.posts.create', [
            'title' => 'Create Post',
            'categories' => Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        return $request->file('image')->store('images');
        $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:posts',
            'category' => 'required|exists:categories,id',
            'image' => 'image|mimes:jpg,jpeg,png|max:2048',
            'content' => 'required'
        ]);

        Post::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'category_id' => $request->category,
            'content' => '<div class="bg-light">' . $request->get('content') . '</div>',
            'excerpt' => Str::limit(strip_tags($request->get('content')), 200, '...'),
            'image' => $request->file('image') ? $request->file('image')->store('images', 'public') : null,
            'published_at' => Carbon::now(),
            'user_id' => auth()->user()->id,
        ]);

        return redirect('dashboard/posts')->with('success', 'Post created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('dashboard.posts.show', [
            'title' => 'Detail Post',
            'post' => $post->load(['author', 'category'])
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('dashboard.posts.create', [
            'title' => 'Edit Post',
            'post' => $post,
            'categories' => Category::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
        $rules = $request->validate([
            'title' => 'required|max:255',
            'slug' => ($request->slug != $post->slug) ? 'required|unique:posts' : 'required',
            'category' => 'required|exists:categories,id',
            'content' => 'required'
        ]);

        $post->update([
            'title' => $request->title,
            'slug' => $request->slug,
            'category_id' => $request->category,
            'content' => '<div class="bg-light">' . $request->get('content') . '</div>',
            'excerpt' => Str::limit(strip_tags($request->get('content')), 200, '...'),
            'published_at' => Carbon::now(),
            'user_id' => auth()->user()->id,
        ]);

        return redirect('/dashboard/posts')->with('success', 'Data has been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
        Post::destroy($post->id);

        return redirect('dashboard/posts')->with('success', 'Post deleted successfully');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
