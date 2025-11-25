<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class SinglePostController extends Controller
{
    /**
     * Handle the incoming request.
     */
// public function __invoke($slug)
// {
//     // Fetch the post by slug
//     $post = Post::where('slug', $slug)->firstOrFail();

//     // Pass it to the view
//     return view('blog.show', compact('post'));
// }


public function __invoke(Request $request, Post $post){

    $post->load('user','category');

$post->increment('views');
 return view('blog.show', compact('post'));
}

//     public function show($slug)
// {
//     $post = Post::where('slug', $slug)->firstOrFail();

//     return view('blog.show', compact('post'));
// }

}
