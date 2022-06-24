<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostControlle extends Controller
{
      public function index()
    {
        $matchThese = ['active' => 'active'];
        $posts = Post::where($matchThese)->get();
    
        return view('posts.index', compact('posts'));
    }
   
   
    public function create()
    {
        return view('posts.create');
    }
    
  
    public function store(Request $request)
    {
    	$request->validate([
            'title'=>'required',
            'body'=>'required',
            'active' =>'non-active'
        ]);
       
        $input = $request->all();
       
        Post::create($input);
    
        return redirect()->route('posts.index');
    }
    

    public function show($id)
    {
    	$post = Post::find($id);
        return view('posts.show', compact('post'));
    }

}