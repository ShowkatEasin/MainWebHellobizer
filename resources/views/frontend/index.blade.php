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
    <!--  ======================Start Banner======================= -->
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

                                        <br>
                                        <a href=" {{route('about')}}">
                                            <button class="btn btn-primary">See details to know</button>
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6 right-info">
                              
                                <img src="assets/img/illustration/3.png" alt="Thumb">
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
                                  {{--  <i class="fab fa-youtube fa-2x" style="color: #0992c0;"></i> --}}
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
                                       You can Transform your business with our expert software development services.
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
                                        to grow sales.
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
                                        Transform your online presence with our professional website design and development.
                                       
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
                                        We provide the best services for Social Media Setup is a crucial for your business.
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
                                        <h5>Social Media Marketing</h5>
                                        <p>Social media marketing is the process of utilizing social media platforms such as Facebook, Twitter, and Instagram to reach target audience. </p> <br>
                                        <button class="btn btn-primary">Get Started</button>
                                    </div>
                                </div>
                            </a>
                            <a href="{{ route('contentmarketing') }}">
                                <div class="single-item">
                                    <div class="item">
                                        <h5>Content Marketing</h5>
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
                                        <h5>Email Marketing</h5>
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
                                        <h5>Video Marketing</h5>
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
                                        <h5>Influencer Marketing</h5>
                                        <p>
                                            Influencer Marketing partners with social media personalities to promote products, brands and business, build awareness, and drive sales &
                                              influencer's credibility.
                                        </p>
                                        <br>
                                        <button class="btn btn-primary">Get Started</button>
                                    </div>
                                </div>
                            </a>
                            <a href="{{ route('seo') }}">
                                <div class="single-item">
                                    <div class="item">
                                        <h5>Search Engine Optimization(SEO)</h5>
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
                                        <h5>Analytics and Tracking</h5>
                                        <p>
                                            Analytics and tracking measures digital marketing campaign performance to optimize for maximum results.
                                           It's a crucial components.
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


    {{-- =================This week Offer start=============== --}}

    <div id="blog" class="blog-area bg-gray default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>This Week offer</h2>
                        <p>In publishing and graphic design, lorem ipsum is a filler text commonly used to demonstrate
                            the graphic elements of a document or visual presentation graphic elements of a document or visual presentation.
                         </p>
                    </div>
                </div>
            </div>
            <div class="blog-items">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <a href="{{route('posterdesign')}}">
                                    <img src="/uploads/graphics/gr3.png" alt="Thumb">  
                                </a>
                            </div>
                            <div class="info">
                                <h4>
                                    <a href="{{route('posterdesign')}}">Poster design </a>
                                </h4>
                                <p style="display: block;overflow:hidden">
                                    You can design your business or corporate campaign poster. We also provide Branding and marketing Services for your company....
                                    <a href="{{route('posterdesign')}}">See Details</a> <br>
                                    
                                </p>
                            </div>
                        </div>
                    </div>
                

                    <div class="col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <a href="{{route('brandingdesign')}}">
                                    <img src="/uploads/graphics/gr2.png" alt="Thumb">
                            </div>
                            <div class="info">
                                <h4>
                                    <a href="{{route('brandingdesign')}}">Branding Design</a>
                                </h4>
                                <p style="display: block;overflow:hidden">
                                    Your business branding is your main attraction.
                                     You can make eye-catching design with discount price within a short time duration....
                                    <a href="{{route('brandingdesign')}}">See Details</a> 
                                    
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <a href="{{route('allwebsite')}}">
                                    <img src="/uploads/website/gr2.png" alt="Thumb">
                            </div>
                            <div class="info">
                                <h4>
                                    <a href="{{route('allwebsite')}}">Website & E-Commerce</a>
                                </h4>
                                <p style="display: block;overflow:hidden">
                                    In this offer you can make website and E-Commerce in budget friendly price within a short time.
                                     We also provide better domain and hosting facilities....
                                    <a href="{{route('allwebsite')}}">See Details</a>
                                  
                                </p>
                            </div>
                        </div>
                    </div>

                 
                    <div class="col-lg-12 col-md-12 pagi-area">
                        <nav aria-label="navigation">
                            <ul class="pagination">
                                <nav role="navigation" aria-label="Pagination Navigation"
                                    class="flex justify-between">

                                    <span
                                        class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md">
                                        &laquo; Previous
                                    </span>


                                    <a href="{{route('allseo')}}" rel="next"
                                        class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                                        Next &raquo;
                                    </a>
                                </nav>

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- =================This week Offer end=============== --}}

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
                        <p>Discover Our Success Stories: Satisfied Clients Share
                             Their Experiences - Read What Our Clients Have to Say About Us.</p>
                    </div>
                </div>
            </div>
            <div class="services-box text-center">
                <div class="row">
                    <div class="services-carosul owl-carousel owl-theme text-center">

                       
                            <div class="single-item">
                                <div class="item">
                                    <img src="{{ asset('uploads/testimonial/p1.png') }}" alt="">
                                    <h5>Tanvir Hossain</h5>
                                    <p>
                                        "HelloBizer is one of the best Digital Marketing Agency in a recent time. Their services and support is amazing."
                                    </p>
                                </div>
                            </div>
                      
                            <div class="single-item">
                                <div class="item">
                                    <img src="{{ asset('uploads/testimonial/p2.png') }}" alt="">
                                    <h5>Faisal Ahmed </h5>
                                    <p>
                                        "I took Professional Page  setup services from HelloBizer. It was an outstanding service from their team."
                                    </p>
                                </div>
                            </div>
                       
                       
                            <div class="single-item">
                                <div class="item">
                                    <img src="{{ asset('uploads/testimonial/p3.png') }}" alt="">
                                    <h5>MST Mohini</h5>
                                    <p>
                                        "HelloBizer is a tremendous Agency for Digital Marketing. Their AD CAMPAIGN is one of the best services"
                                    </p>
                                </div>
                            </div>
                        
                       
                            <div class="single-item">
                                <div class="item">
                                    <img src="{{ asset('uploads/testimonial/p4.png') }}" alt="">
                                    <h5>Hridoy Howladar</h5>
                                    <p>
                                        "Their Professional Page Setup and Monitoriing is best. I really like their professinalism and Services."
                                    </p>
                                </div>
                            </div>
                        </a>
                       
                            <div class="single-item">
                                <div class="item">
                                    <img src="{{ asset('uploads/testimonial/p5.png') }}" alt="">
                                    <h5>Shamima Shima</h5>
                                    <p>
                                        "HelloBizer is best for their Branding Design and Digital Marketing. They have professionalism in their services."
                                    </p>
                                </div>
                            </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- =================== Testimonial End ==============================-->

     <!--  ====================Why Choose========================= -->

  
     <div id="services" class="services-area bg-theme-small default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>Why Choose Us ?</h2>
                        <p>Our Digital Marketing include startup business, civil society organisations, faith
                            communities,
                            faith-based organisations, businesses, academia, and more. </p>
                    </div>
                </div>

                <div class="row g-5">
                    <div class="col-lg-4">
                        <div class="row g-5">
                            <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                                
                               <h3>Best In Industry</h3>
                                <p>At HelloBizer, we are committed to being the best in the digital marketing industry. We are passionate about what we do, and we
                                     take pride in delivering exceptional results for our clients.</p>
                            </div>
                            <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                                <br>
                                <br>
                                <br>
                                
                                <h3>Competitive Pricing</h3>
                                <p>We believe in providing high-quality digital marketing services at a fair and competitive price. We understand that every business has unique needs and budgets,
                                     which is why we offer a range of pricing packages to fit your specific needs and goals.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                        <div class="position-relative h-100">
                            <br>
                            <br>
                           
                            <img src="/uploads/home/meeting.webp" alt="Thumb">
                           
                           
                        </div>
                        

                    </div>
                    <div class="col-lg-4">
                        <div class="row g-8">
                            <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                                
                                <h3> Professional Team</h3>
                                <p>At HelloBizer, we pride ourselves on having a team of highly professional and experienced experts. Our team is made up of individuals who are passionate & dedicated
                                     to helping our clients achieve their business goals.</p>
                            </div>
                            <div class="col-12 wow zoomIn justify-content-right mb-10" data-wow-delay="0.8s">
                                <br>
                                <br>
                                <br>
                                
                                <h3>24/7 Support</h3>
                                <p>We believe that exceptional customer service and support are key to our success. Our Team is always available to answer your questions,
                                     provide guidance, and offer support throughout the entire process.</p>
                            </div>
                        </div>
                    </div>
            </div>           
            <div class="services-box text-center">
                <div class="row">
                    <div class="services-carosul owl-carousel owl-theme text-center">

                       
                    </div>
                </div>
            </div>
        </div>
    </div>


<!-- End Why -->

          {{--========================= LOGO-Partner Start=============== --}}

   {{--  <div id="services" class="services-area bg-theme-small default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>Our Recent Clients</h2>
                        <p>Our partners are more than just clients - they're an integral part of our team.
                             Here are some of the organizations we've worked with to achieve great things.</p>
                    </div>
                </div>
            </div>
            <div class="services-box text-center">
                <div class="row">
                    <div class="services-carosul owl-carousel owl-theme text-center">


                        
                            <div class="single-item">
                                <div class="item">
                                    <img src="{{ asset('uploads/partner/pn1.png') }}" alt="">
                                </div>
                            </div>
                      

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
    </div>--}}
    </div> 

    {{-- LOGO-Partner End --}}

   

    <!-- Start Contact Area-->
    @include('frontend.getintouch')
    <!-- End Contact -->
@endsection
