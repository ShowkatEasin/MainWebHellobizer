<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DigitalMarketingController extends Controller
{
    public function socialmediamarketing (){
        return view ('frontend.socialmediamarketing');
    }
    public function contentmarketing (){
        return view ('frontend.contentmarketing');
    }
    public function emailmarketing (){
        return view ('frontend.emailmarketing');
    }
    public function videomarketing (){
        return view ('frontend.videomarketing');
    }
    public function influencermarketing (){
        return view ('frontend.influencermarketing');
    }
    public function seo (){
        return view ('frontend.seo');
    }
    public function analyticsandtracking (){
        return view ('frontend.analyticsandtracking');
    }
}
