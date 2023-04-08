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
    <!--====================Start Banner========================= -->

    <div class="banner-area shape-index transparent-nav content-double text-medium">
        <div class="box-table">
            <div class="box-cell">
                <div class="container">
                    <div class="double-items thumb-140">
                        <div class="row align-center">
                            <div class="col-lg-6 left-info simple-video">
                                <div class="content" data-animation="animated fadeInUpBig">
                                    <h1>Let's Build Something Amazing<span> Together</span> </h1>
                                    <p>HelloBizer is an Internet Marketing Firm Located in Bangladesh. We are providing services in
                                        various fields related to Online Marketing, Web Designing and Development. We assure
                                        the best working environment that is fun, rewarding and beneficial to our employees.
                                        We help our employees to reach their full potential while growing professionally.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6 right-info">

                                <img src="assets/img/career/career.jpg" alt="Thumb">
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

    <!--====================== Start Key Elements ======================= -->
    <div id="blog" class="blog-area bg-gray default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>Our Great <span>Benefits</span></h2>
                        <p>Every organization is different. As a member of the HelloBizer Partner program,
                            we do everything we can to help you and your clients succeed. </p>
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
                                <h3>Global Work Environment</h3>
                                <p>Offer a wide range of spaces for collaboration and socialization.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-5">
                        <div class="item">
                            <div class="thumb">
                            </div>
                            <div class="info">
                                <h3>Professional Development Courses</h3>
                                <p>In-hour and online. Which help to build your career.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-5">
                        <div class="item">
                            <div class="thumb">
                            </div>
                            <div class="info">

                                <h3>Career Development</h3>
                                <p>Internal mobility opportunities to improve your ideas and skills.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-5">
                        <div class="item">
                            <div class="thumb">
                            </div>
                            <div class="info">

                                <h3>We love Celebrations</h3>
                                <p>Celebrate colleagues birthdays, Fun days, All-hands, happy hour, summer events.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-5">
                        <div class="item">
                            <div class="thumb">
                            </div>
                            <div class="info">

                                <h3>Pay it forward </h3>
                                <p>Volunteer Projects Throughout the year. It helps to increase your business strategies.
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-5">
                        <div class="item">
                            <div class="thumb">
                            </div>
                            <div class="info">

                                <h3>Healthy Choices</h3>
                                <p>Subsidized gym membership and healthy lifestyle .</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-5">
                        <div class="item">
                            <div class="thumb">
                            </div>
                            <div class="info">

                                <h3>Virtual Events</h3>
                                <p>Combine In-Person And Virtual Experiences With a Hybrid Event and Easy Setup with 24/7
                                    Support.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-5">
                        <div class="item">
                            <div class="thumb">
                            </div>
                            <div class="info">

                                <h3>Friendly Environment</h3>
                                <p>Your work will be more productive when you are in a friendly places.</p>

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

   <!--======================== Start Contact Area  ============================================= -->
   <div id="contact" class="contact-us-area default-padding bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="site-heading text-center">
                    <h2>Let's Start your career with us</h2>
                    <p>
                        Here you can apply to us, when it will be touch our requirements the we will call you for an interview.
                    </p>
                </div>
            </div>
        </div>

       {{-- Form Start--}}

       <div class="row">
        <!-- <div class="form-header">
                <h3>Schedule a Brief Meeting to Discuss

                </h3>
            </div> -->
        <div class="pricing-item">
            <ul>
                <li class="pricing-header">
                    <h2>Apply Here</h2>
                </li>

                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <div class="career-search mb-60">
                                <div class="job-box d-md-flex align-items-center justify-content-between mb-30">
                                    <div class="job-left my-4 d-md-flex align-items-center flex-wrap">
                                        <div class="img-holder mr-md-4 mb-md-0 mb-4 mx-auto mx-md-0 d-md-none d-lg-flex">
                                           Dev
                                        </div>
                                        <div class="job-content">
                                        <h2>Front End Developer</h2>
                                            <ul class="d-md-flex flex-wrap text-capitalize ff-open-sans">
                                                <li class="mr-md-4">
                                                    <i class="zmdi zmdi-pin mr-2"></i> Work At Office
                                                </li>
                                                <li class="mr-md-4">
                                                    <i class="zmdi zmdi-money mr-2"></i> 10:00am-7:00pm
                                                </li>
                                                <li class="mr-md-4">
                                                    <i class="zmdi zmdi-time mr-2"></i> Full Time
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <a href="">
                                        <button class="btn btn-primary">Apply Now</button>
                                    </a>
                                </div>
            
                                <div class="job-box d-md-flex align-items-center justify-content-between mb-30">
                                    <div class="job-left my-4 d-md-flex align-items-center flex-wrap">
                                        <div class="img-holder mr-md-4 mb-md-0 mb-4 mx-auto mx-md-0 d-md-none d-lg-flex">
                                            UX
                                        </div>
                                        <div class="job-content">
                                            <h2>Ui/Ux Developer</h2>
                                            <ul class="d-md-flex flex-wrap text-capitalize ff-open-sans">
                                                <li class="mr-md-4">
                                                    <i class="zmdi zmdi-pin mr-2"></i> Work At Office
                                                </li>
                                                <li class="mr-md-4">
                                                    <i class="zmdi zmdi-money mr-2"></i> 10:00am-7:00pm
                                                <li class="mr-md-4">
                                                    <i class="zmdi zmdi-time mr-2"></i> Full Time
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <a href="">
                                        <button class="btn btn-primary">Apply Now</button>
                                    </a>
                                </div>
            
                                <div class="job-box d-md-flex align-items-center justify-content-between mb-30">
                                    <div class="job-left my-4 d-md-flex align-items-center flex-wrap">
                                        <div class="img-holder mr-md-4 mb-md-0 mb-4 mx-auto mx-md-0 d-md-none d-lg-flex">
                                            GD
                                        </div>
                                        <div class="job-content">
                                            <h2>Graphic Designer</h2>
                                            <ul class="d-md-flex flex-wrap text-capitalize ff-open-sans">
                                                <li class="mr-md-4">
                                                    <i class="zmdi zmdi-pin mr-2"></i> Work At Office
                                                </li>
                                                <li class="mr-md-4">
                                                    <i class="zmdi zmdi-money mr-2"></i> 10:00am-7:00pm
                                                </li>
                                                <li class="mr-md-4">
                                                    <i class="zmdi zmdi-time mr-2"></i> Full Time
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <a href="">
                                        <button class="btn btn-primary">Apply Now</button>
                                    </a>
                                </div>
            
                                <div class="job-box d-md-flex align-items-center justify-content-between mb-30">
                                    <div class="job-left my-4 d-md-flex align-items-center flex-wrap">
                                        <div class="img-holder mr-md-4 mb-md-0 mb-4 mx-auto mx-md-0 d-md-none d-lg-flex">
                                            JS
                                        </div>
                                        <div class="job-content">
                                            <h2>Javascript Developer</h2>
                                            <ul class="d-md-flex flex-wrap text-capitalize ff-open-sans">
                                                <li class="mr-md-4">
                                                    <i class="zmdi zmdi-pin mr-2"></i>  Work At Office
                                                </li>
                                                <li class="mr-md-4">
                                                    <i class="zmdi zmdi-money mr-2"></i> 10:00am-7:00pm
                                                </li>
                                                <li class="mr-md-4">
                                                    <i class="zmdi zmdi-time mr-2"></i> Full Time
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <a href="">
                                        <button class="btn btn-primary">Apply Now</button>
                                    </a>
                                </div>
            
                            </div>
                        </div>
            
                       
                    </div>
                </div>
            
            </div>
                

            </ul>
        </div>
    </div>
</div>
</div>



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


    @include('frontend.getintouch')
    <!-- End Contact -->
@endsection
