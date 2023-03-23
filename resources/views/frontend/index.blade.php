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
                                    <h1>One Stop <span>Solutions</span> for your business</h1>
                                    <p>We specialize in providing one-stop solutions for all your business needs. With our
                                        innovative solutions,
                                        expert team, and cutting-edge technologies, we help our clients stay ahead of the
                                        curve and achieve success in their
                                        respective industries.
                                    </p>
                                    <a href=" {{route('about')}}">
                                        <button class="btn btn-primary">See details to know</button>
                                    </a>

                                </div>
                            </div>
                            <div class="col-lg-6 right-info">
                              
                                <img src="assets/img/illustration/3.png" alt="Thumb">
                            </div>
                            
                            {{-- <div class="form-group col-md-6 col-sm-12 col-lg-6 mr-5">
                                <div class="subscribe">
                                    <form action="{{ route('service.search') }}" method="POST">
                                        @csrf
                                        <div class="input-group stylish-input-group ">
                                            <input type="text" placeholder="Find Your Solution" class="form-control"
                                                name="search"id="email">
                                            <span class="input-group-addon">
                                                <button type="submit">
                                                    <i class="fa fa-paper-plane"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div> --}}
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

    <!--  ====================Start Digitam Marketing========================= -->

  
        <div id="services" class="services-area bg-theme-small default-padding bottom-less">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="site-heading text-center">
                            <h2>For Your Digital Marketing{{--  @foreach ($frontServices as $serv)  @if ($serv->id == $titles->special_service) {{$serv->title}} @endif @endforeach --}}</h2>
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
                                        <p>Social media marketing is the process of utilizing any kinds of social media
                                            platforms to reach
                                            a target audience.</p> <br>
                                        <button class="btn btn-primary">Get Started</button>
                                    </div>
                                </div>
                            </a>
                            <a href="{{ route('contentmarketing') }}">
                                <div class="single-item">
                                    <div class="item">
                                        <h4> <strong>Content Marketing</strong></h4>
                                        <p>
                                            Our marketing strategy used to attract an audience
                                            by creating and sharing relevant articles, videos and social media.
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
                                            Email marketing is a powerful marketing channel,
                                            a form of direct marketing as well as digital, corporate and social marketing.
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
                                            Our Video productio services can help direct people to your business,
                                            build your reputation and expand your sales.
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
                                            Influencer marketing is a form of marketing that enables businesses to
                                            collaborate with brand exposure to improve your company.
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
                                            SEO improving your website and better visibility
                                            your pages have in search results found and clicked on.
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
                                            Analytics tracking enables you to
                                            identify and track contacts you can see their activities on your website.
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


    <!-- ==============Testimonial Start =====================-->

    <div id="services" class="services-area bg-theme-small default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>Testimonial</h2>
                        <p>Here is the comments and reviews of our beloved Customers</p>
                    </div>
                </div>
            </div>
            <div class="services-box text-center">
                <div class="row">
                    <div class="services-carosul owl-carousel owl-theme text-center">

                        <a href="">
                            <div class="single-item">
                                <div class="item">
                                    <img src="{{ asset('uploads/testimonial/p1.png') }}" alt="">
                                    <h5>Customer Name</h5>
                                    <p>
                                        "I took many services from Hello bizer. Their services and support is amaizing."
                                    </p>
                                </div>
                            </div>
                        </a>
                        <a href="">
                            <div class="single-item">
                                <div class="item">
                                    <img src="{{ asset('uploads/testimonial/p2.png') }}" alt="">
                                    <h5>Customer Name</h5>
                                    <p>
                                        "I took many services from Hello bizer. Their services and support is amaizing."
                                    </p>
                                </div>
                            </div>
                        </a>
                        <a href="">
                            <div class="single-item">
                                <div class="item">
                                    <img src="{{ asset('uploads/testimonial/p3.png') }}" alt="">
                                    <h5>Customer Name</h5>
                                    <p>
                                        "I took many services from Hello bizer. Their services and support is amaizing."
                                    </p>
                                </div>
                            </div>
                        </a>
                        <a href="">
                            <div class="single-item">
                                <div class="item">
                                    <img src="{{ asset('uploads/testimonial/p4.png') }}" alt="">
                                    <h5>Customer Name</h5>
                                    <p>
                                        "I took many services from Hello bizer. Their services and support is amaizing."
                                    </p>
                                </div>
                            </div>
                        </a>
                        <a href="">
                            <div class="single-item">
                                <div class="item">
                                    <img src="{{ asset('uploads/testimonial/p5.png') }}" alt="">
                                    <h5>Customer Name</h5>
                                    <p>
                                        "I took many services from Hello bizer. Their services and support is amaizing."
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- =================== Testimonial End ==============================-->

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

   

    <!-- Start Contact Area-->
    @include('frontend.getintouch')
    <!-- End Contact -->
@endsection
