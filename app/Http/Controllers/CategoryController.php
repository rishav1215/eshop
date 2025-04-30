<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function manageCategory(){
        $categories=category::orderBy("id","DESC")->paginate(20);
        $parent_categories = Category::where("category_id",NULL)->get();
        return view('admin.manageCategory',compact('categories','parent_categories'));
    }

    public function createCategory(Request $request){
        $request->validate([
            'cat_title'=>'required|string|max:255',

        ]);

        Category::create([
            'cat_title'=>$request->cat_title,
            'cat_description'=>$request->cat_description,
            'category_id'=>$request->category_id,
            
        ]);

        return redirect()->route('admin.manageCategory')->with('msg','category created successfully');

    }
    public function deleteCategory(request $request, $id){
        $data = Category::find($id);
        $data->delete();
        return redirect()->back()->with("msg", "category deleted successfully");
    }
    public function updateCategory(request $request, $id){
        $request->validate([
            'cat_title'=>'required|string|max:255',

        ]);

        Category::find($id)->update([
            'cat_title'=>$request->cat_title,
            'cat_description'=>$request->cat_description,
            'category_id'=>$request->category_id,
            
        ]);
        return redirect()->route('admin.manageCategory')->with('msg','category updated successfully');
    }
}
