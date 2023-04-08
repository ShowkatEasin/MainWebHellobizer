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
                                    <p>Content marketing is a marketing strategy used to attract, engage, and retain an audience by creating and sharing relevant articles, videos, podcasts, and other media. This approach establishes expertise, promotes brand awareness, and keeps your business top of mind when it's time to buy what you sell.
                                    </p>
                                    <a href=" {{route('contact')}}">
                                        <button class="btn btn-primary">Talk With Our Cutomer Support Team</button>
                                    </a>
                                   

                                </div>
                            </div>
                            <div class="col-lg-6 right-info">
                               
                                <img src="assets/img/illustration/contentmarketing.png" alt="Thumb">
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


   

         <!--====================== Start Key Elements ======================= -->
    <div id="blog" class="blog-area bg-gray default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>Our <span> Content Marketeing </span>Services  </h2>
                        <p>A better design will help a business to gain high visibility which in turn can lead to increased sales. Attractive visuals, effective communication of ideas, higher visibility and enhanced credibility push traffic to your brand. Increased traffic to more opportunities.</p>
                    </div>
                </div>
            </div>
            <div class="blog-items">
                <div class="row">
                    
                    <div class="col-lg-3 col-md-5">
                        <div class="item">
                            <div class="thumb">
                            </div>
                            <div class="info">

                                <h4>Strategy development</h4>
                                <p>This involves developing a comprehensive content marketing strategy that aligns with a business goals and objectives. A content marketing strategy will typically include plan for creation, distribution, promotion.</p>

                            </div>
                        </div>
                    </div>
                   
                    <div class="col-lg-3 col-md-5">
                        <div class="item">
                            <div class="thumb">
                            </div>
                            <div class="info">

                                <h4>Content optimization</h4>
                                <p>Content optimization is the process of making sure content is written in a way that it can reach the largest possible target audience. This process should 
                                     associated keywords by adding meta, tags and relevant links.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-5">
                        <div class="item">
                            <div class="thumb">
                            </div>
                            <div class="info">

                                <h4>Content distribution</h4>
                                <p>Content distribution is a critical piece of the content marketing puzzle. Because of that it's is also the key to boosting your brand awareness,
                                    and collecting loyal followers, and encouraging your readers to click, act, and become customers.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-5">
                        <div class="item">
                            <div class="thumb">
                            </div>
                            <div class="info">

                                <h4>Content analytics</h4>
                                <p>Companies use content analytics software to provide visibility into the amount of content that is being created, the nature of that content and how it is used. A company produces two types of content: structured and unstructured.</p>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 pagi-area">
                        <nav aria-label="navigation">
                            <ul class="pagination">
                                <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-between">
                                </nav>

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </body>
    <!-- End  Key Elements -->

   {{--  Get A Free 30-Minute Strategy Session Start --}}

   <div id="contact" class="contact-us-area default-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="site-heading text-center">
                    <h2>Let us build your brand</h2>
                    <p>
                        Learning day desirous informed expenses material returned six the. She enabled invited
                        exposed him another. Reasonably conviction solicitude me mr at discretion reasonable. Age
                        out full gate bed day lose.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 address">
                <div class="address-items">
                    <div class="google-maps">
                        {!! $titles->map !!}
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h2>Get A Free 30-Minute Strategy Session</h2>
                <form action="{{ route('sendmessage') }}" method="POST">
                    @csrf
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="form-group">
                                <input class="form-control" id="name" name="name" placeholder="Name"
                                    type="text" required>
                                <span class="alert-error"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="form-group">
                                <input class="form-control" id="email" name="email" placeholder="Email*"
                                    type="email" required>
                                <span class="alert-error"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="form-group">
                                <input class="form-control" id="phone" name="phone" placeholder="Phone"
                                    type="text" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="form-group comments">
                                <textarea class="form-control" id="message" name="message" placeholder="Tell Us About Project *" rows="4"
                                    cols="50"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="row">
                            <button type="submit" name="submit" class="button">
                                Claim Now
                            </button>
                        </div>
                    </div>
                    <!-- Alert Message -->
                    <div class="col-lg-12 alert-notification">
                        <div id="message" class="alert-msg">
                            @if (Session::has('success'))
                                <p>{!! Session('success') !!}</p>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
   {{--  Get A Free 30-Minute Strategy Session End --}}


   <!-- Start About
    ============================================= -->
    <div id="about" class="about-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 default info">
                    
                    <h2>Get in touch</h2>
                    <ul>
                        <li>
                            <i class=""></i> <span>There are some facilities to connect with us to get couple of discound offers in weekly and monthly packages.</span>
                        </li>
                    </ul>
                  
                    <div class="bottom-info">
                        <ul>
                            <li>
                                <i class="fas fa-check"></i> <span>Digital Maketing Serveces.</span>
                            </li>
                            <li>
                                <i class="fas fa-check"></i> <span>We Provide official website with friendly budget.</span>
                            </li>
                            <li>
                                <i class="fas fa-check"></i> <span>E-Commerce for your Business.</span>
                            </li>
                            <li>
                                <i class="fas fa-check"></i> <span>Branding and Monitization for Startup Business.</span>
                            </li>
                            <li>
                                <i class="fas fa-check"></i> <span>Software Solution</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 services-info">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="item">
                                
                                <h4>Location</h4>
                                <p>
                                    House-15, Rd 03, Block-B, Rampura Banasree, 1219
                                    Dhaka Bangladesh.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="item">
                               
                                <h4>Contact Us</h4>
                                <p>
                                    Phone: +8801324-738600 <br>
                                    Email: hellobizer@gmail.com
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="item">
                            
                                <h4>Our Hours</h4>
                                <p>
                                    We are open Six Days a Week <br>
                                    SAT-THUR 10:00 AM - 07:00 PM
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 item">
                            <div class="f-item">
                              
                               <h4>Social Contact</h4>
                                
                              <ul>
                                <li>
                                    <a href="https://www.facebook.com/hellobizer"><i class="fab fa-facebook-f" style="color: #0992c0;"></i></a> &nbsp; &nbsp;
                                    <i class="fab fa-instagram" style="color: #0992c0;"></i>&nbsp; &nbsp;
                                    <i class="fab fa-linkedin-in fa-2x" style="color: #0992c0;"></i>&nbsp; &nbsp;
                                    <i class="fab fa-whatsapp fa-2x" style="color: #0992c0;"></i> &nbsp; &nbsp;
                                    <i class="fab fa-youtube fa-2x" style="color: #0992c0;"></i>
                                </li>
                              </ul>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- End About -->
        </div>
    </div>
</div>
   {{--  Get in Touch End --}}
    
    <!-- End Contact -->
@endsection
