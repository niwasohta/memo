<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dbuserController extends Controller
{
    
        public function index(Post $post)
    {
        return view('index')->with(['posts' => $post->get()]);
        return view('index')->with(['posts' => $post->getByLimit()]);
        return view('index')->with(['posts' => $post->getPaginateByLimit()]);
    }
    
    
         public function memo()
    {
        return view('memo');
    }
    
    
        public function store(Request $request, Post $post)
    {
        $input = $request['post'];
        //dd('$input');
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
}
