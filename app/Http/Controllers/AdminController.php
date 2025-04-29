<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view("admin.dashboard");
    }

    public function manageCategory(){
        $categories=category::orderBy("id","DESC")->paginate(20);
        return view('admin.manageCategory',compact('categories'));
    }

    public function createCategory(Request $request){
        $request->validate([
            'cat_title'=>'required|string|max:255',

        ]);

        category::create([
            'cat_title'=>$request->cat_title,
            'cat_description'=>$request->cat_description,
            'category_id'=>$request->category_id,
            
        ]);

        return redirect()->route('admin.manageCategory')->with('success','category created successfully');

    }
}
