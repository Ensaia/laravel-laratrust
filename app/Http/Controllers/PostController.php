<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Config;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::paginate(20);
        return view("dashboard.post.index", ["posts" => $posts]);

    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("dashboard.post.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {
        Post::create($request->validated());
        return redirect()->route('postCreate')->with('success', Config::get('constants.message.INSERT_SUCCESS'));

    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $post = Post::findOrFail($post->id);
        return view("dashboard.post.edit", ["post" => $post]);

    }
    /**
      * Update the specified resource in storage.
      */
     public function update(PostRequest $request, Post $post)
     {
         $post->update($request->validated());
         return redirect()->route('postEdit', $post->id)->with('success', Config::get('constants.message.UPDATE_SUCCESS'));
     }

     /**
      * Remove the specified resource from storage.
      */
     public function destroy(Post $post)
     {
         $post->delete();
         return redirect()->route('postsIndex')->with('success', Config::get('constants.message.DELETE_SUCCESS'));
     }
}
