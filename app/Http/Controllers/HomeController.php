<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $products=product::paginate(50);
        return view("home",compact("products"));

    }
    public function login(){
        return view("login");
    }
}
