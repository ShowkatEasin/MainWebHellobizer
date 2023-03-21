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
                                    <p>We specialize in providing one-stop solutions for all your business needs. With our innovative solutions,
                                         expert team, and cutting-edge technologies, we help our clients stay ahead of the curve and achieve success in their
                                          respective industries. So if you're looking for a reliable partner to help you take your business to the next level,
                                         look no further than our digital business service provider firm.
                                        </p>
                          
                                    </div>
                                 </div> 
                            <div class="col-lg-6 right-info">
                                <img src="assets/img/illustration/3.png" alt="Thumb">
                            </div>
                            <div class="form-group col-md-6 col-sm-12 col-lg-6 mr-5">
                                <div class="subscribe">
                                    <form action="{{route('service.search')}}" method="POST">
                                        @csrf
                                        <div class="input-group stylish-input-group ">
                                            <input type="text" placeholder="Find Your Solution" class="form-control" name="search"id="email">
                                            <span class="input-group-addon">
                                                <button type="submit">
                                                    <i class="fa fa-paper-plane"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
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

                                      <a href="{{route('videomaking')}}">
                                        <div class="single-item">
                                            <div class="item">
                                                <img src="{{asset('uploads/service/icon/videoicon.png')}}" alt="">
                                                <h5>Video Making</h5>
                                                <p>
                                                    Elevate your brand's visual story telling with our expert and professional video-making services for your company.
                                                </p>
                                            </div>
                                        </div>
                                    </a> 
                                    <a href="{{route('softwaredevelopment')}}">
                                        <div class="single-item">
                                            <div class="item">
                                                <img src="{{asset('uploads/service/icon/softicon.png')}}" alt="">
                                                <h5>Software Development</h5>
                                                <p>
                                                    Transform your business with our expert software development services. Our team creates custom software solutions.
                                                    {{-- {{ Str::limit(strip_tags( $serv->description)) }} --}}
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="{{route('businessconsultancy')}}">
                                        <div class="single-item">
                                            <div class="item">
                                                <img src="{{asset('uploads/service/icon/businessicon.png')}}" alt="">
                                                <h5>Business Consultancy</h5>
                                                <p>
                                                    Unlock your business's full potential with our expert business consultancy services to improve your company.
                                                   {{--  {{ Str::limit(strip_tags( $serv->description)) }} --}}
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                
                                    <a href="{{route('digitalmarketing')}}">
                                        <div class="single-item">
                                            <div class="item">
                                                <img src="{{asset('uploads/service/icon/branding.png')}}" alt="">
                                                <h5>Digital Marketing</h5>
                                                <p>
                                                    Grow your business and reach your target audience with our comprehensive digital marketing services for your Company. 
                                                    {{-- {{ Str::limit(strip_tags( $serv->description)) }} --}}
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="{{route('graphicsdesign')}}">
                                        <div class="single-item">
                                            <div class="item">
                                                <img src="{{asset('uploads/service/icon/graphic.png')}}" alt="">
                                                <h5>Graphics Design
                                                </h5>
                                                <p>
                                                    Elevate your brand's visual identity with our expert and professional graphic design services as your requirements. 
                                                    {{-- {{ Str::limit(strip_tags( $serv->description)) }} --}}
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                  <a href="{{route('webdesignanddevelopment')}}">
                                        <div class="single-item">
                                            <div class="item">
                                                <img src="{{asset('uploads/service/icon/web.png')}}" alt="">
                                                <h5>Web Design & Development</h5>
                                                <p>
                                                    Transform your online presence with our professional website design and development services. 
                                                    {{-- {{ Str::limit(strip_tags( $serv->description)) }} --}}
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="{{route('socialmedia')}}">
                                        <div class="single-item">
                                            <div class="item">
                                                <img src="{{asset('uploads/service/icon/digital.png')}}" alt="">
                                                <h5>Social Media Setup & Monitoring</h5>
                                                <p>
                                                    We provide the best services for Social Media Setup is a crucial component of any digital marketing strategy. 
                                                   {{--  {{ Str::limit(strip_tags( $serv->description)) }} --}}
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="{{route('appdesign')}}">
                                        <div class="single-item">
                                            <div class="item">
                                                <img src="{{asset('uploads/service/icon/app.png')}}" alt="">
                                                <h5>App Design & Development</h5>
                                                <p>
                                                    This services that deliver innovative and user-friendly mobile applications for businesses.
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

@if ($titles->special_service > 0)
<div id="services" class="services-area bg-theme-small default-padding bottom-less">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="site-heading text-center">
                    <h2>For Your Digital Marketing{{--  @foreach ( $frontServices as $serv)  @if ($serv->id == $titles->special_service) {{$serv->title}} @endif @endforeach --}}</h2>
                    <p>Our Digital Marketing include startup business, civil society organisations, faith communities,
                         faith-based organisations, businesses, academia, and more. </p>
                </div>
            </div>
        </div>
        <div class="services-box text-center">
            <div class="row">
                <div class="services-carosul owl-carousel owl-theme text-center">
              
                    <a href="{{route('socialmediamarketing')}}">
                        <div class="single-item">
                            <div class="item">
                                <h3>Social Media Marketing</h3>
                                <p>Social media marketing is the process of utilizing any kinds of social media platforms to reach 
                                     a target audience.</p> <br>
                                     <button class="btn btn-primary">Get Started</button>
                            </div>
                        </div>
                    </a>
                    <a href="{{route('contentmarketing')}}">
                        <div class="single-item">
                            <div class="item">
                                <h3>Content Marketing</h3>
                                <p>
                                    Our marketing strategy used to attract an audience
                                     by creating and sharing relevant articles, videos and media.
                                </p>  <br>
                                
                                <button class="btn btn-primary">Get Started</button>
                            </div>
                        </div>
                    </a>

                    <a href="{{route('emailmarketing')}}">
                        <div class="single-item">
                            <div class="item">
                                <h3>Email Marketing</h3>
                                <p>
                                    Email marketing is a powerful marketing channel,
                                     a form of direct marketing as well as digital, corporate and social marketing.
                                </p>
                                <br>
                                <button class="btn btn-primary">Get Started</button>

                            </div>
                        </div>
                    </a>

                    <a href="{{route('videomarketing')}}">
                        <div class="single-item">
                            <div class="item">
                                <h3>Video Marketing</h3>
                                <p>
                                   Our Video productio services can help direct people to your business,
                                   build your reputation and expand your sales.
                                </p>
                                <br>
                                <button class="btn btn-primary">Get Started</button>
                            </div>
                        </div>
                    </a>

                    <a href="{{route('influencermarketing')}}">
                        <div class="single-item">
                            <div class="item">
                                <h3>Influencer Marketing</h3>
                                <p>
                                    Influencer marketing is a form of marketing that enables businesses to
                                     collaborate with brand exposure.
                                </p>
                                <br>
                                <button class="btn btn-primary">Get Started</button>
                            </div>
                        </div>
                    </a>

                    <a href="{{route('seo')}}">
                        <div class="single-item">
                            <div class="item">
                                <h3>Search Engine Optimization(SEO)</h3>
                                <p>
                                     SEO improving your website and better visibility
                                     your pages have in search results found and clicked on.
                                </p>
                                <br>
                                <button class="btn btn-primary">Get Started</button>
                            </div>
                        </div>
                    </a>

                    <a href="{{route('analyticsandtracking')}}">
                        <div class="single-item">
                            <div class="item">
                                <h3>Analytics and Tracking</h3>
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
@endif

<!-- End Digital marketing -->




<!-- ======================Start Blog======================= -->
<div id="blog" class="blog-area bg-gray default-padding bottom-less">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="site-heading text-center">
                    <h2>This Week Offers</h2>
                    <p>
                        We are providing many offer and discount in every week.
                        We love it, even if we don’t want to admit it. For many people,
                         it would be almost impossible not to click to find out what “your deal” is.
                        {{-- {{$titles->blog_text}} --}}
                    </p>
                </div>
            </div>
        </div>
        <div class="blog-items">
            <div class="row">
                @foreach ($offers as $blog)
                {{-- <div class="col-lg-4 col-md-6">
                    <div class="item"> --}}
                       {{--  <div class="thumb">
                            <a href="{{url('news/'.$blog->slug)}}">
                                <img src="{{asset('uploads/blog/medium/web.jpg'/* .$blog->image */)}}" alt="Thumb">
                            </a>
                        </div> --}}
                  {{--       
                    </div>
                </div> --}}
                @endforeach 

               {{-- New Offer Start --}}

                <div class="col-lg-4 col-md-6">
                    <div class="item">
                        <div class="thumb">
                            <a href="{{-- {{url('news/'.$blog->slug)}} --}}">
                                <img src="{{asset('uploads/blog/medium/web.jpg'/* .$blog->image */)}}" alt="Thumb">
                            </a>
                        </div>
                        <div class="info">
                            <h4>
                                <a href="{{url('news/'.$blog->slug)}}">Web Design & Development{{-- {{$blog->title}} --}}</a>
                            </h4>
                            <div class="meta">
                            </div>
                            <p style="display: block;overflow:hidden">
                               {{--  {{ Str::limit(strip_tags( $blog->description)) }} --}}

                               Transform your online presence with our professional website design and development services.

                                <a href="{{-- {{url('news/'.$blog->slug)}} --}}">Read more</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="item">
                        <div class="thumb">
                            <a href="{{-- {{url('news/'.$blog->slug)}} --}}">
                                <img src="{{asset('uploads/blog/medium/graphic.jpg'/* .$blog->image */)}}" alt="Thumb">
                            </a>
                        </div>
                        <div class="info">
                            <h4>
                                <a href="{{url('news/'.$blog->slug)}}">Graphics Design{{-- {{$blog->title}} --}}</a>
                            </h4>
                            <div class="meta">
                            </div>
                            <p style="display: block;overflow:hidden">
                               {{--  {{ Str::limit(strip_tags( $blog->description)) }} --}}
                                 Elevate your brand's visual identity with our expert and professional graphic design services as your requirements. 
                                <a href="{{-- {{url('news/'.$blog->slug)}} --}}">Read more</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="item">
                        <div class="thumb">
                            <a href="{{-- {{url('news/'.$blog->slug)}} --}}">
                                <img src="{{asset('uploads/blog/medium/digitalmarket.png'/* .$blog->image */)}}" alt="Thumb">
                            </a>
                        </div>
                        <div class="info">
                            <h4>
                                <a href="{{url('news/'.$blog->slug)}}">Digital Marketing{{-- {{$blog->title}} --}}</a>
                            </h4>
                            <div class="meta">
                            </div>
                            <p style="display: block;overflow:hidden">
                               {{--  {{ Str::limit(strip_tags( $blog->description)) }} --}}
                               Grow your business and reach your target audience with our comprehensive digital marketing services. 
                                <a href="{{-- {{url('news/'.$blog->slug)}} --}}">Read more</a>
                            </p>
                        </div>
                    </div>
                </div>

                {{-- New Offer End --}}

            </div>
        </div>
    </div>
</div>
<!-- End Blog -->
<!-- ====================Start Why Chose Us========================= -->
    <div id="about" class="choseus-area default-padding">
        <div class="container">
            <div class="choseus-items">
                <div class="row">
                   {{--  <div class="col-lg-6 thumb">
                        <img src="{{asset('assets/img/illustration/1.png')}}" alt="Thumb">
                    </div> --}}
                    {{-- <div class="col-lg-6 info">
                        <h2>Create your app page <br>with expert developer</h2>
                        <p>
                            If you think your business needs to grow, then get started with us.
                        </p>
                        <ul>
                            <li>Cultivated an up solicitude mr unpleasant. </li>
                            <li>Improved own provided blessing</li>
                            <li>Moment led family.</li>
                            <li>Opinions property the supplied. </li>
                        </ul>
                    </div> --}}
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
                                            <img src="{{asset('uploads/testimonial/p1.png')}}" alt="">
                                            <h3>Customer Name</h3>
                                            <p>
                                                "I took many services from Hello bizer. Their services and support is amaizing."
                                            </p>
                                        </div>
                                    </div>
                                </a> 
                                <a href="">
                                    <div class="single-item">
                                        <div class="item">
                                            <img src="{{asset('uploads/testimonial/p2.png')}}" alt="">
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
                                            <img src="{{asset('uploads/testimonial/p3.png')}}" alt="">
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
                                            <img src="{{asset('uploads/testimonial/p4.png')}}" alt="">
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
                                            <img src="{{asset('uploads/testimonial/p5.png')}}" alt="">
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

{{-- LOGO-Partner Start --}}
               
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
                               <h1>LOGO</h1>
                                <h5>Company Name</h5>                          
                            </div>
                        </div>
                    </a> 
                                  
                    <a href="">
                        <div class="single-item">
                            <div class="item">
                               <h1>LOGO</h1>
                                <h5>Company Name</h5>                          
                            </div>
                        </div>
                    </a> 

                    <a href="">
                        <div class="single-item">
                            <div class="item">
                               <h1>LOGO</h1>
                                <h5>Company Name</h5>                          
                            </div>
                        </div>
                    </a> 
                          </div>
                     </div>
                 </div>
             </div>
        </div>

            {{-- LOGO-Partner End --}}

<!--=====================Start Work Process Area======================== -->
    <div class="work-process-area bg-gray default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>Our Working{{-- {{$titles->progress_title}} --}}</h2>
                        <p>
                            Our innovative solutions, expert team, and cutting-edge technologies, we help our clients stay ahead of the curve and achieve success in their respective industries. 
                        </p>
                    </div>
                </div>
            </div>
            <div class="works-process-items text-center">
                <div class="row">
                    <!-- Single Item -->
                    <div class="col-lg-4 single-item">
                        <div class="item">
                            <div class="icon">
                                <i><img src="{{asset('assets/img/discuss.gif')}}" alt=""></i>
                                <span>01</span>
                            </div>
                            <div class="info">
                                <h4>Discussion</h4>
                                <p>
                                    Building a business from the ground up doesn’t come with an instructional manual, after all, and you certainly won’t be a business mogul on day one.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->

                    <!-- Single Item -->
                    <div class="col-lg-4 single-item">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-bong"></i>
                                <span>02</span>
                            </div>
                            <div class="info">
                                <h4>Strategy & Testing</h4>
                                <p>
                                    A Test Strategy is a plan for defining an approach to the Software Testing Life Cycle (STLC). It guides QA teams to define Test Coverage and testing scope.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->

                    <!-- Single Item -->
                    <div class="col-lg-4 single-item">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-copy"></i>
                                <span>03</span>
                            </div>
                            <div class="info">
                                <h4>Reporting</h4>
                                <p>
                                    Management reporting is a source of business intelligence that helps business leaders in making more accurate, data-driven decision goes into preparing and presenting.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>

     <!-- Start Testimonials
    ============================================= -->
     <div class="testimonials-area default-padding" style="display: none">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading single text-center">
                        <h2>Testimonial</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="testimonial-items text-center">
                        <div class="carousel slide" data-ride="carousel" data-interval="500000"
                            id="testimonial-carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <span class="quote"></span>
                                    <p>
                                        Understood instrument or do connection no appearance do invitation. Dried quick
                                        round it or order. Add past see west felt did any. Say out noise you taste merry
                                        plate you share. My resolve arrived is we chamber be removal.
                                    </p>
                                    <h4>Junl Sarukh</h4>
                                    <span>CEO of Softing</span>
                                </div>
                                <div class="carousel-item">
                                    <span class="quote"></span>
                                    <p>
                                        Understood instrument or do connection no appearance do invitation. Dried quick
                                        round it or order. Add past see west felt did any. Say out noise you taste merry
                                        plate you share. My resolve arrived is we chamber be removal.
                                    </p>
                                    <h4>Anil Spia</h4>
                                    <span>Director of Softing</span>
                                </div>
                                <div class="carousel-item">
                                    <span class="quote"></span>
                                    <p>
                                        Understood instrument or do connection no appearance do invitation. Dried quick
                                        round it or order. Add past see west felt did any. Say out noise you taste merry
                                        plate you share. My resolve arrived is we chamber be removal.
                                    </p>
                                    <h4>Paul Munni</h4>
                                    <span>Developer of Softing</span>
                                </div>
                            </div>
                            <!-- End Carousel Content -->

                            <!-- Carousel Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#testimonial-carousel" data-slide-to="0" class="active">
                                    <img src="assets/img/800x800.png" alt="Thumb">
                                </li>
                                <li data-target="#testimonial-carousel" data-slide-to="1">
                                    <img src="assets/img/800x800.png" alt="Thumb">
                                </li>
                                <li data-target="#testimonial-carousel" data-slide-to="2">
                                    <img src="assets/img/800x800.png" alt="Thumb">
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <!-- End Testimonials -->
<!--=====================Start Work Process End======================== -->

 <!-- ======================Start Blog======================= -->
   {{--  <div id="blog" class="blog-area bg-gray default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>{{$titles->blog_title}}</h2>
                        <p>
                            {{$titles->blog_text}}
                        </p>
                    </div>
                </div>
            </div>
            <div class="blog-items">
                <div class="row">
                    @foreach ($blogs as $blog)
                    <div class="col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <a href="{{url('news/'.$blog->slug)}}">
                                    <img src="{{asset('uploads/blog/medium/'.$blog->image)}}" alt="Thumb">
                                    <div class="post-type">
                                        <i class="fas fa-image"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="info">
                                <h4>
                                    <a href="{{url('news/'.$blog->slug)}}">{{$blog->title}}</a>
                                </h4>
                                <div class="meta">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-calendar-alt "></i>  {{ date('d M, Y', strtotime($blog->created_at)) }}</a></li>
                                        <li><a href="{{route('singleCat',[$blog->category->slug])}}"><i class="fas fa-flag"></i> {{$blog->category->name}}</a></li>
                                    </ul>
                                </div>
                                <p style="display: block;overflow:hidden">
                                    {{ Str::limit(strip_tags( $blog->description)) }}
                                    <a href="{{url('news/'.$blog->slug)}}">Read more</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <a class="btn circle btn-theme effect btn-sm m-auto" href="{{route('blog')}}">Load More</a>

                </div>
            </div>
        </div>
    </div> --}}
    <!-- End Blog -->

    <!-- Start Testimonials
    ============================================= -->
    {{-- <div class="testimonials-area default-padding" style="display: none">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading single text-center">
                        <h2>{{$titles->testimonial_title}}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="testimonial-items text-center">
                        <div class="carousel slide" data-ride="carousel" data-interval="500000"
                            id="testimonial-carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <span class="quote"></span>
                                    <p>
                                        Understood instrument or do connection no appearance do invitation. Dried quick
                                        round it or order. Add past see west felt did any. Say out noise you taste merry
                                        plate you share. My resolve arrived is we chamber be removal.
                                    </p>
                                    <h4>Junl Sarukh</h4>
                                    <span>CEO of Softing</span>
                                </div>
                                <div class="carousel-item">
                                    <span class="quote"></span>
                                    <p>
                                        Understood instrument or do connection no appearance do invitation. Dried quick
                                        round it or order. Add past see west felt did any. Say out noise you taste merry
                                        plate you share. My resolve arrived is we chamber be removal.
                                    </p>
                                    <h4>Anil Spia</h4>
                                    <span>Director of Softing</span>
                                </div>
                                <div class="carousel-item">
                                    <span class="quote"></span>
                                    <p>
                                        Understood instrument or do connection no appearance do invitation. Dried quick
                                        round it or order. Add past see west felt did any. Say out noise you taste merry
                                        plate you share. My resolve arrived is we chamber be removal.
                                    </p>
                                    <h4>Paul Munni</h4>
                                    <span>Developer of Softing</span>
                                </div>
                            </div>
                            <!-- End Carousel Content -->

                            <!-- Carousel Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#testimonial-carousel" data-slide-to="0" class="active">
                                    <img src="assets/img/800x800.png" alt="Thumb">
                                </li>
                                <li data-target="#testimonial-carousel" data-slide-to="1">
                                    <img src="assets/img/800x800.png" alt="Thumb">
                                </li>
                                <li data-target="#testimonial-carousel" data-slide-to="2">
                                    <img src="assets/img/800x800.png" alt="Thumb">
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- End Testimonials -->

    <!-- Start Contact Area-->
     @include('frontend.getintouch')
    <!-- End Contact -->
@endsection


