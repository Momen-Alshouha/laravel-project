<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class postAdminController extends Controller
{
    public function index()
    {
        
        $posts = Post::all();
    
        return view('admin.post', compact('posts'));
    }
   

    public function show($id)
    {
    	$post = Post::find($id);
        return view('admin.post', compact('post'));
    }

     public function edit($id)
    {
        $post = Post::find($id);
        return view('admin.editPost') -> with('post', $post);
    }

   
    public function update(Request $request)
    {
        $id=$request->id;
        $post = Post::find($id);
        $post->title=$request->title;
        $post->body=$request->body;
        $post->active=$request->active;
        $post->save();
        return redirect('post')->with('flash_message', 'post Updated!');
    }

  
    public function destroy($post)
    {
        $m = Post::find($post);
        $m->delete();
        return redirect()->back()->with('status', 'post Deleted Successfully');
    }

}
