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
                                    <h1>Software <span>Development</span> </h1>
                                    <p>We specialize in providing one-stop solutions for all your business needs. With our
                                        innovative solutions,
                                        expert team, and cutting-edge technologies expert team.
                                    </p>
                                    <a href=" {{route('contact')}}">
                                        <button class="btn btn-primary">Talk With Our Cutomer Support Team</button>
                                    </a>
                                   

                                </div>
                            </div>
                            <div class="col-lg-6 right-info">
                               
                                <img src="assets/img/illustration/soft.png" alt="Thumb">
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



    <!--======================Start Services======================= -->
    <div id="services" class="services-area bg-theme-small default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>What We Offer</h2>
                        <p>We are here to provide the services to grow your business up. Here, you can find the support
                            of Graphics, Branding, Marketing, Software’s & More</p>
                    </div>
                </div>
            </div>
            <div class="services-box text-center">
                <div class="row">
                    <div class="services-carosul owl-carousel owl-theme text-center">

                        {{-- Add new 8 point Here --}}

                        <a href="{{ route('videomaking') }}">
                            <div class="single-item">
                                <div class="item">
                                    <img src="{{ asset('uploads/service/icon/videoicon.png') }}" alt="">
                                    <h5>Video Making</h5>
                                    <p>
                                        Elevate your brand's visual story telling with our expert and professional
                                        video-making services for your company.
                                    </p>
                                </div>
                            </div>
                        </a>
                        <a href="{{ route('softwaredevelopment') }}">
                            <div class="single-item">
                                <div class="item">
                                    <img src="{{ asset('uploads/service/icon/softicon.png') }}" alt="">
                                    <h5>Software Development</h5>
                                    <p>
                                        Transform your business with our expert software development services. Our team
                                        creates custom software solutions.
                                        {{-- {{ Str::limit(strip_tags( $serv->description)) }} --}}
                                    </p>
                                </div>
                            </div>
                        </a>
                        <a href="{{ route('businessconsultancy') }}">
                            <div class="single-item">
                                <div class="item">
                                    <img src="{{ asset('uploads/service/icon/businessicon.png') }}" alt="">
                                    <h5>Business Consultancy</h5>
                                    <p>
                                        Unlock your business's full potential with our expert business consultancy services
                                        to improve your company.
                                        {{--  {{ Str::limit(strip_tags( $serv->description)) }} --}}
                                    </p>
                                </div>
                            </div>
                        </a>

                        <a href="{{ route('digitalmarketing') }}">
                            <div class="single-item">
                                <div class="item">
                                    <img src="{{ asset('uploads/service/icon/branding.png') }}" alt="">
                                    <h5>Digital Marketing</h5>
                                    <p>
                                        Grow your business and reach your target audience with our comprehensive digital
                                        marketing services for your Company.
                                        {{-- {{ Str::limit(strip_tags( $serv->description)) }} --}}
                                    </p>
                                </div>
                            </div>
                        </a>
                        <a href="{{ route('graphicsdesign') }}">
                            <div class="single-item">
                                <div class="item">
                                    <img src="{{ asset('uploads/service/icon/graphic.png') }}" alt="">
                                    <h5>Graphics Design
                                    </h5>
                                    <p>
                                        Elevate your brand's visual identity with our expert and professional graphic design
                                        services as your requirements.
                                        {{-- {{ Str::limit(strip_tags( $serv->description)) }} --}}
                                    </p>
                                </div>
                            </div>
                        </a>
                        <a href="{{ route('webdesignanddevelopment') }}">
                            <div class="single-item">
                                <div class="item">
                                    <img src="{{ asset('uploads/service/icon/web.png') }}" alt="">
                                    <h5>Web Design & Development</h5>
                                    <p>
                                        Transform your online presence with our professional website design and development
                                        services.
                                        {{-- {{ Str::limit(strip_tags( $serv->description)) }} --}}
                                    </p>
                                </div>
                            </div>
                        </a>
                        <a href="{{ route('socialmedia') }}">
                            <div class="single-item">
                                <div class="item">
                                    <img src="{{ asset('uploads/service/icon/digital.png') }}" alt="">
                                    <h5>Social Media Setup & Monitoring</h5>
                                    <p>
                                        We provide the best services for Social Media Setup is a crucial component of any
                                        digital marketing strategy.
                                        {{--  {{ Str::limit(strip_tags( $serv->description)) }} --}}
                                    </p>
                                </div>
                            </div>
                        </a>
                        <a href="{{ route('appdesign') }}">
                            <div class="single-item">
                                <div class="item">
                                    <img src="{{ asset('uploads/service/icon/app.png') }}" alt="">
                                    <h5>App Design & Development</h5>
                                    <p>
                                        This services that deliver innovative and user-friendly mobile applications for
                                        businesses.
                                        {{--  {{ Str::limit(strip_tags( $serv->description)) }} --}}
                                    </p>
                                </div>
                            </div>
                        </a>
                        {{-- End new 8 --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Services -->
    <!-- start Emi Banner Area -->
    {{-- <div id="emi-banner">
        <div class="container default-padding">
            <img src="assets/img/emi.webp" alt="">
        </div>
    </div> --}}
    <!-- End Emi Banner Area -->


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
