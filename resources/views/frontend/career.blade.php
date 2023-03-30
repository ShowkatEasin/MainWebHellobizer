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
                                    <h1>Let's Build Something Amazing<span> Together</span> </h1>
                                    <p> Social media marketing is the process of utilizing social media platforms such as Facebook, Twitter, and Instagram to reach and engage with a target audience, build brand 
                                        awareness, and promote products or services.
                                    </p>
                                   {{--  <a href=" {{route('contact')}}">
                                        <button class="btn btn-primary">Talk With Our Cutomer Support Team</button>
                                    </a> --}}
                                   

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
                                        <h3>Technical training</h3>
                                        <p>Improve your skills to serve better and sell more.</p>
                                    
                                  </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-5">
                        <div class="item">
                            <div class="thumb">
                            </div>
                            <div class="info">   
                                        <h3>Sales enablement</h3>
                                        <p>We help you activate your lead base to identify opportunities.</p>
                                 
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-5">
                        <div class="item">
                            <div class="thumb">
                            </div>
                            <div class="info">     
                                   
                                        <h3>Incentives and discounts</h3>
                                        <p>We encourage a true partnership program with exclusive advantages.</p>
                                   
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-5">
                        <div class="item">
                            <div class="thumb">
                            </div>
                            <div class="info">     
                                      
                                        <h3>Deal registration</h3>
                                        <p>Provides transparent reporting and visibility into referral pipeline.</p>
                                    
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-5">
                        <div class="item">
                            <div class="thumb">
                            </div>
                            <div class="info">     
                                      
                                        <h3>Customized marketing </h3>
                                        <p>Keeps campaigns moving quickly and consistently.</p>
                                   
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-5">
                        <div class="item">
                            <div class="thumb">
                            </div>
                            <div class="info">     
                                      
                                        <h3>Partner portal</h3>
                                        <p>Track every step of your business partnership journey with HelloBizer.</p>
                                    
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-5">
                        <div class="item">
                            <div class="thumb">
                            </div>
                            <div class="info">     
                                        
                                        <h3>Sales Team</h3>
                                        <p>Offer sales support at every stage of a client’s campaign.</p>
                                     
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-5">
                        <div class="item">
                            <div class="thumb">
                            </div>
                            <div class="info">     
                                        
                                        <h3>Marketing Ideas</h3>
                                        <p>Proven strategies to drive referrals and increase revenue share.</p>
                                    
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


                                    <a href="" rel="next"
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

</body>
<!-- End  Key Elements -->
    
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
