@extends('frontend.layouts.main')
@section('main-content')

       <!--  ====================Start Portfolio Content========================= -->

       <div id="services" class="services-area bg-theme-small default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>Our portfolio</h2>
                        <p>Our Portfolio include startup business, civil society organisations, faith
                            communities,
                            faith-based organisations, businesses, academia, and more. Our Digital Marketing include startup business, civil society organisations, faith communities,
                             faith-based organisations, businesses, academia, and more.  </p>

                             <br>
                             <br>
                       </div>
                   </div>
               </div>
            <div class="services-box text-center">
                <div class="row">
                    <div class="services-carosul owl-carousel owl-theme text-center">

                        <a href="{{ route('allproject')}}"> 
                            <h1>All Project</h1>                
                          </a>

                          <a href="{{route('digitalmarketingportfolio')}}"> 
                            <h1>Digital Marketing</h1>                   
                          </a>

                          <a href="{{route('seoportfolio')}}"> 
                            <h1>SEO</h1>                   
                            </a>

                            <a href="{{route('graphicsportfolio')}}"> 
                                <h1>Graphic Design</h1>                   
                             </a>

                         <a href="{{ route('websiteportfolio') }}"> 
                            <h1>Website</h1>                   
                          </a>
                          <a href="{{route('ecommerceportfolio')}}"> 
                            <h1>E-Commerce</h1>                   
                          </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- End Portfolio Center  -->
 <!-- ====================Start % option ========================= -->
 <div id="about" class="choseus-area default-padding">
    <div class="container">
        <div class="choseus-items">
            <div class="row">
                
            </div>
        </div>
        <div class="customer">
            <div class="col-lg-4 col-md-4 item">
                <div class="fun-fact">
                    <div class="timer" data-to="230" data-speed="5000"></div>
                    <span class="medium">Satisfied customers</span>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 item">
                <div class="fun-fact">
                    <div class="timer" data-to="50" data-speed="5000"></div>
                    <span class="medium">Professional Agents</span>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 item">
                <div class="fun-fact">
                    <div class="timer" data-to="92" data-speed="5000"></div>
                    <span class="medium">Professional Projects</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Why Us -->
 {{--========================= LOGO-Partner Start=============== --}}

 <div id="services" class="services-area bg-theme-small default-padding bottom-less">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="site-heading text-center">
                    <h2>Our Recent Clients</h2>
                    <p>We are here to provide the services to grow your business up. Here, you can find the support
                        of Graphics, Branding, Marketing, Software’s & More</p>
                </div>
            </div>
        </div>
        <div class="services-box text-center">
            <div class="row">
                <div class="services-carosul owl-carousel owl-theme text-center">
                    <a href="">
                        <div class="single-item">
                            <div class="item">
                                <img src="{{ asset('uploads/partner/pn1.png') }}" alt="">
                            </div>
                        </div>
                    </a>
                    
                 <a href="">
                        <div class="single-item">
                            <div class="item">
                                <img src="{{ asset('uploads/partner/pn2.png') }}" alt="">
                            </div>
                        </div>
                    </a>

                    <a href="">
                        <div class="single-item">
                            <div class="item">
                                <img src="{{ asset('uploads/partner/pn3.png') }}" alt="">
                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="single-item">
                            <div class="item">
                                <img src="{{ asset('uploads/partner/pn4.png') }}" alt="">
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- LOGO-Partner End --}}


@endsection
