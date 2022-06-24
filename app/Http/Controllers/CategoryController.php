<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
   
    public function index()
    {
        $data = category::all();
        return view('admin.category',compact('data'));
    }

    public function store(Request $request)
    {
  
        $request->validate(['category_name'=>'min:3|required',
         'category_image'=>'mimes:jpg,png|image']);

        $category= new category();
        $category->category_name=$request->category_name;
          $category->category_description=$request->category_description;
       
          if($request->hasfile('category_image')){
            $file=$request->file('category_image');
            $ex=$file->getClientOriginalExtension();
            $filename=time().'.'.$ex;
            $file->move('uploads/category',$filename);
            $category->category_image=$filename;
        }

        $category->save();
        return redirect() -> route('category.index')->with('flash_message', 'category Added!');
    

    }

  
     public function edit($id)
    {
        $category = category::find($id);
        return view('admin.edit') -> with('categories', $category);
    }

   
    public function update(Request $request)
    {
        $id=$request->id;
        $category = category::find($id);
        if($request->hasfile('category_image')){
            $file=$request->file('category_image');
            $ex=$file->getClientOriginalExtension();
            $filename=time().'.'.$ex;
            $file->move('uploads/category',$filename);
            $category->category_image=$filename;
        }
        $category->category_name=$request->category_name;
         $category->category_description=$request->category_description;
        $category->save();
        return redirect('category')->with('flash_message', 'category Updated!');
    }


    public function destroy($category)
    {
        $m = category::find($category);
        $m->delete();
        return redirect()->back()->with('status', 'Category Deleted Successfully');
    }

    
}
