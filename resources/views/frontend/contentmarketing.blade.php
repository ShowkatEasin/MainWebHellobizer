@extends('frontend.layouts.main')
@section('frontcss')
    <style>
        /* .no-background .nav  li a{
                color:white!important;
            }
            .no-background .nav .dropdown-menu li a{
                color: #333333!important;
            } */
    </style>
@stop
@section('main-content')

    <br>
    <br>
    <!-- Start Banner
        ============================================= -->
    <div class="banner-area shape-index transparent-nav content-double text-medium">
        <div class="box-table">
            <div class="box-cell">
                <div class="container">
                    <div class="double-items thumb-140">
                        <div class="row align-center">
                            <div class="col-lg-6 left-info simple-video">
                                <div class="content" data-animation="animated fadeInUpBig">
                                    <h1>Content<span> Marketing</span> </h1>
                                    <p>Content marketing is a strategy that creates and shares valuable, relevant content to attract and retain an audience.
                                         It builds trust, establishes thought leadership, and drives conversions.
                                    </p>
                                    <a href=" {{route('contact')}}">
                                        <button class="btn btn-primary">Talk With Our Cutomer Support Team</button>
                                    </a>
                                   

                                </div>
                            </div>
                            <div class="col-lg-6 right-info">
                               
                                <img src="assets/img/illustration/content.png" alt="Thumb">
                            </div>
                           
                        </div>
                    </div>
                </div>
                <div class="wavesshape">
                    <img src="assets/img/shape/1.png" alt="Shape">
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->



    <!--  ====================Start Digitam Marketing========================= -->

  
    <div id="services" class="services-area bg-theme-small default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>For Your Digital Marketing</h2>
                        <p>Our Digital Marketing include startup business, civil society organisations, faith
                            communities,
                            faith-based organisations, businesses, academia, and more. </p>
                    </div>
                </div>
            </div>
            <div class="services-box text-center">
                <div class="row">
                    <div class="services-carosul owl-carousel owl-theme text-center">

                        <a href="{{ route('socialmediamarketing') }}">
                            <div class="single-item">
                                <div class="item">
                                    <h4><strong>Social Media Marketing</strong></h4>
                                    <p>Social media marketing is the process of utilizing social media platforms such as Facebook, Twitter, and Instagram to reach target audience.</p> <br>
                                    <button class="btn btn-primary">Get Started</button>
                                </div>
                            </div>
                        </a>
                        <a href="{{ route('contentmarketing') }}">
                            <div class="single-item">
                                <div class="item">
                                    <h4> <strong>Content Marketing</strong></h4>
                                    <p>
                                        Content marketing is a strategy that creates and shares valuable, relevant content to attract and retain an audience.
                                         It builds trust, establishes thought leadership.
                                    </p> <br>

                                    <button class="btn btn-primary">Get Started</button>
                                </div>
                            </div>
                        </a>

                        <a href="{{ route('emailmarketing') }}">
                            <div class="single-item">
                                <div class="item">
                                    <h4><strong>Email Marketing</strong></h4>
                                    <p>
                                        Email marketing is a strategy that involves sending personalized messages
                                         to subscribers to promote products, build relationships, and increase sales for your business.
                                    </p>
                                    <br>
                                    <button class="btn btn-primary">Get Started</button>

                                </div>
                            </div>
                        </a>

                        <a href="{{ route('videomarketing') }}">
                            <div class="single-item">
                                <div class="item">
                                    <h4><strong>Video Marketing</strong></h4>
                                    <p>
                                        Video marketing is a strategy that uses videos to promote products, services,
                                         and brands. It engages audiences, increases brand awareness, and drives conversions.
                                    </p>
                                    <br>
                                    <button class="btn btn-primary">Get Started</button>
                                </div>
                            </div>
                        </a>

                        <a href="{{ route('influencermarketing') }}">
                            <div class="single-item">
                                <div class="item">
                                    <h4><strong>Influencer Marketing</strong></h4>
                                    <p>
                                        Influencer marketing partners with social media personalities to promote products or brands, build awareness, and drive sales.
                                         It leverages an influencer's credibility.
                                    </p>
                                    <br>
                                    <button class="btn btn-primary">Get Started</button>
                                </div>
                            </div>
                        </a>

                        <a href="{{ route('seo') }}">
                            <div class="single-item">
                                <div class="item">
                                    <h4><strong>Search Engine Optimization(SEO)</strong></h4>
                                    <p>
                                        SEO is the process of optimizing websites to rank higher in search engine results pages. It improves
                                         website visibility, and increases conversions.
                                    </p>
                                    <br>
                                    <button class="btn btn-primary">Get Started</button>
                                </div>
                            </div>
                        </a>

                        <a href="{{ route('analyticsandtracking') }}">
                            <div class="single-item">
                                <div class="item">
                                    <h4><strong>Analytics and Tracking</strong></h4>
                                    <p>
                                        Analytics and tracking are digital marketing campaign performance to optimize strategies for maximum results.
                                         These are crucial components of any digital marketing.
                                    </p>
                                    <br>
                                    <button class="btn btn-primary">Get Started</button>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


<!-- End Digital marketing -->
    
    <!-- ====================Start Why Chose Us========================= -->
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
                        <h2>Our Partners</h2>
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

    
    @include('frontend.getintouch')
    <!-- End Contact -->
@endsection
