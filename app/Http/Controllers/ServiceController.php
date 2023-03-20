<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function videomaking (){
        return view ('frontend.videomaking');
    }
     public function softwaredevelopment (){
        return view ('frontend.softwaredevelopment');
    }
    public function businessconsultancy (){
        return view ('frontend.businessconsultancy');
    }
    public function digitalmarketing (){
        return view ('frontend.digitalmarketing');
    }
    public function graphicsdesign (){
        return view ('frontend.graphicsdesign');
    }
    public function webdesignanddevelopment (){
        return view ('frontend.webdesignanddevelopment');
    }
    public function socialmedia (){
        return view ('frontend.socialmedia');
    }
    public function appdesign (){
        return view ('frontend.appdesign');
    }
}
