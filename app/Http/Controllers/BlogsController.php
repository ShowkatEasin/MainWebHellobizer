<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function blogs (){
        return view('frontend.blog');
    }
    public function blog1 (){
        return view('frontend.blog1');
    }
    public function blog2 (){
        return view('frontend.blog2');
    }
    public function blog3 (){
        return view('frontend.blog3');
    }
    public function blog4 (){
        return view('frontend.blog4');
    }
    public function blog5 (){
        return view('frontend.blog5');
    }
    public function blog6 (){
        return view('frontend.blog6');
    }
}
