<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function memo(Post $post)
    {
        return view('memo')->with(['posts' => $post->get()]); 
    }
    public function store(Post $post,Request $request)
    {
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
}
