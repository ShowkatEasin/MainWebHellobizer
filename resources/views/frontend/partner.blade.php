@extends('frontend.layouts.main')
@section('main-content')



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
                                    <h1>We are relevant and consistent. We want to <span>partner </span>with you.  </h1>
                                    <p>A business partner is a commercial entity with which another commercial entity has some form of alliance. This relationship may be a contractual, exclusive bond in which both entities commit not to ally with third parties. 
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6 right-info">
                               
                                <img src="/uploads/partner/pr.png" alt="Thumb">
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

   {{-- ========== Who can partner start============== --}}

    <div class="banner-area content-double shape-line bg-theme-small normal-text">
        <div class="box-table">
            <div class="box-cell">
                <div class="container">
                    <div class="double-items">
                        <div class="row align-center">
                            <div class="col-lg-5 left-info simple-video">
                                
                                
                                <div class="content" data-animation="animated fadeInUpBig">
                                    <h1>Who can partner?</h1>
                                    <p>
                                        Agencies, creative firms, developers, consulting firms, IT firms, and investors
                                         all make great partners, but we don’t stop there. We can work with any company or major influencer with an agreeable
                                         process and company base that matches our value proposition and client profile. 
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-7 right-info">
                                <img src="{{asset('uploads/partner/partner2.jpg')}}" alt="Thumb">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wavesshape">
                    <img src="assets/img/waves-shape.svg" alt="Shape">
                </div>
            </div>
        </div>
    </div>

    <!--====================== Who Can Partner End======================= -->


     <!-- Start About
    ============================================= -->
    <div id="about" class="about-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 default info">
                    <h4>About the partner programme</h4>
                    <h2>How is the partnership set up?</h2>
                    <div class="bottom-info">
                       <p>
                        Our partner marketing strategy gets all different sized businesses on the first page of Google.
                         Become a HelloBizer partner and we’ll get your clients there, too.
                        Our partner marketing strategy gets all different sized businesses on the first page of Google.
                         Become a HelloBizer partner and we’ll get your clients there, too.
                       </p>
                       <br>
                       
                       <ul>
                        <li>
                            <i class="fas fa-check"></i> <span>Awards - Community participation</span>
                        </li>
                        <li>
                            <i class="fas fa-check"></i> <span>Mentoring - business skilled support</span>
                        </li>
                        <li>
                            <i class="fas fa-check"></i> <span>Discount - goods or services</span>
                        </li>
                        <li>
                            <i class="fas fa-check"></i> <span>Sponsorship - exposure in return for money or in-kind</span>
                        </li>
                        <li>
                            <i class="fas fa-check"></i> <span>Collection Point - for goods or services</span>
                        </li>
                        <li>
                            <i class="fas fa-check"></i> <span>Infrastructure - meeting space or shared office</span>
                        </li>
                        <li>
                            <i class="fas fa-check"></i> <span>Employment - members work experience</span>
                        </li>
                        <li>
                            <i class="fas fa-check"></i> <span>In-Kind Support - goods or services</span>
                        </li>
                        
                    </ul>
                    <br>
                    </div>
                </div>
                <div class="col-lg-6 services-info">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="item">
                                <i class="flaticon-ticket"></i>
                                <h4>Referral Partnership</h4>
                                <p>
                                    The most common partnership is a
                                     referral partnership where you do the referring
                                      and we do the contracting. 
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="item">
                                <i class="flaticon-speech-bubble"></i>
                                <h4>Strategic Partnership</h4>
                                <p>
                                    For partners with clear overlapping value
                                     propositions and large client bases, we can engage strategically.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="item">
                                <i class="flaticon-email"></i>
                                <h4>Channel Reseller</h4>
                                <p>
                                    If you are an agency that would like to broaden your scope of offerings, increase your advertising. 
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="item">
                                <i class="flaticon-file"></i>
                                <h4>Reporting Partnership </h4>
                                 <p>
                                    A partnership must file an annual information return to identify your record.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- End About -->

    <!--====================== Start Key Elements ======================= -->
        <div id="blog" class="blog-area bg-gray default-padding bottom-less">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="site-heading text-center">
                            <h2>Key elements of our partner program.</h2>
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
                                            <p>Improve your skills to serve better and Sales for your business or Company.</p>
                                        
                                      </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-5">
                            <div class="item">
                                <div class="thumb">
                                </div>
                                <div class="info"> 
                                           
                                            <h3>Sales enablement</h3>
                                            <p>We help you activate your lead base to identify your brand to get better opportunities.</p>
                                     
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-5">
                            <div class="item">
                                <div class="thumb">
                                </div>
                                <div class="info">     
                                           
                                            <h3>Incentives and discounts</h3>
                                            <p>We encourage a true partnership program with advantages.</p>
                                       
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

    {{--========================= Contact Start=============== --}}

    <div id="contact" class="contact-us-area default-padding">
        <div class="container">
            
            <div class="row">
                <!-- <div class="form-header">
                        <h3>Schedule a Brief Meeting to Discuss

                        </h3>
                    </div> -->
                <div class="pricing-item">
                    <ul>
                        <li class="pricing-header">
                            <h2>Partner with us.</h2>
                            @if (Session::has('success'))
                                <p style="font-size: 20px; color: green;padding-top: 20px;">{!! Session('success') !!}</p>
                            @endif
                        </li>
                        <form action="{{ route('freequotesend') }}" class="free-quote" method="POST">
                            @csrf

                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <input type="text" class="form-control" placeholder="Your Name"name="name" required>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <input type="text" class="form-control" placeholder="Phone Number" name="phone" required>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <input type="email" class="form-control" placeholder="Email Address" name="email" required>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <input type="text" class="form-control" placeholder="Facebook Page/Website Url"
                                        name="url" required>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <select name="mainservice" id="mainservice" class="form-control" rel="2" required>
                                        <option value="" style="display: none" selected>Select Services</option>
                                        @foreach ($frontServices as $service)
                                            @if ($service->parent_id == null)
                                                <option value="{{ $service->id }}" rel="{{ $service->id }}"
                                                    class="mainservice"> {{ $service->title }}</option>
                                            @endif
                                        @endforeach


                                    </select>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <select name="mainservice" id="mainservice" class="form-control" rel="2" required>
                                        <option value="" style="display: none" selected>Select Schedule</option>
                                        @foreach ($frontServices as $service)
                                            @if ($service->parent_id == null)
                                                <option value="{{ $service->id }}" rel="{{ $service->id }}"
                                                    class="mainservice"> {{ $service->title }}</option>
                                            @endif
                                        @endforeach


                                    </select>
                                </div>
                                <div class="col-md-12 col-lg-12">
                                    <textarea class="form-control" id="comments" name="comments" placeholder="Tell Us About Project *" rows="5"></textarea>
                                </div>
                            </div>
                            <li class="footer">
                                <button class="btn circle btn-theme border btn-sm">Send</button>
                            </li>
                        </form>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact -->
           
    {{-- Contact End --}}



    


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



@endsection
