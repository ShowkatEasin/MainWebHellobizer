<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioContentController extends Controller
{
    public function allproject(){

        return view ('frontend.allproject');
    }
    public function digitalmarketingportfolio(){

        return view ('frontend.digitalmarketingportfolio');
    }
    public function seoportfolio(){

        return view ('frontend.seoportfolio');
    }
    public function graphicsportfolio(){

        return view ('frontend.graphicsportfolio');
    }
    public function websiteportfolio(){

        return view ('frontend.websiteportfolio');
    }
    public function ecommerceportfolio(){

        return view ('frontend.ecommerceportfolio');
    }

     /*======================== Portfolio Graphic Design LOGO / BRAND / POSTER =============*/ 

     public function logodesign(){
        return view ('frontend.logodesign');
    }
     public function brandingdesign(){
        return view ('frontend.brandingdesign');
    }
     public function posterdesign(){
        return view ('frontend.posterdesign');
    }

     /*======================== Portfolio Website =============*/ 

     public function allwebsite(){
        return view ('frontend.allwebsite');
    }
     /*======================== Portfolio WebE-Commercesite =============*/ 

     public function allecommerce(){
        return view ('frontend.allecommerce');
    }
     /*======================== Portfolio SEO =============*/ 

     public function allseo(){
        return view ('frontend.allseo');
    }
     /*======================== Portfolio Digital Marketing =============*/ 

     public function alldigitalmarketing(){
        return view ('frontend.alldigitalmarketing');
    }

}
