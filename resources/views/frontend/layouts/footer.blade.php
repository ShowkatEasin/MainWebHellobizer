<!--  ==================Start Footer=========================== -->
    <footer class="footer-padding bg-light">
        <div class="container ml-10px">
            <div class="f-items">
                <div class="row ml-">
                    <div class="col-lg-3 col-md-6 item">
                        <div class="f-item">
                            <img src="{{asset('assets/img/light-logo.png')}}" alt="Logo">
                            <p>We specialize in providing one-stop 
                                solutions for all your business needs.</p>
                            
                          <ul>
                            <li>
                                <a href="https://www.facebook.com/hellobizer"><i class="fab fa-facebook-f fa-2x" style="color: #0992c0;"></i></a>&nbsp; &nbsp;
                                <i class="fab fa-instagram fa-2x" style="color: #0992c0;"></i>&nbsp; &nbsp;
                                <i class="fab fa-linkedin-in fa-2x" style="color: #0992c0;"></i>&nbsp; &nbsp;
                                <i class="fab fa-whatsapp fa-2x" style="color: #0992c0;"></i> &nbsp; &nbsp;
                                <i class="fab fa-youtube fa-2x" style="color: #0992c0;"></i>
                            </li>
                          </ul> 
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 item l-10">
                        <section class="site-heading ">
                            <h2 style="font-size: 18px">Shortcut Link</h2>
                            <ul>
                                <li style="border-bottom: 1px dashed #4ac4f3;">
                                    <a class="smooth-menu" href="{{route('service')}}">Service</a>
                                </li>
                                <li style="border-bottom: 1px dashed #4ac4f3;">
                                    <a class="smooth-menu" href="{{route('portfolio')}}">Portfolio</a>
                                </li>
                                <li style="border-bottom: 1px dashed #4ac4f3;">
                                    <a class="smooth-menu" href="{{route('partner')}}">Partner</a>
                                </li>
                                <li style="border-bottom: 1px dashed #4ac4f3;">
                                    <a class="smooth-menu" href="{{route('career')}}">Career</a>
                                </li>
                                <li style="border-bottom: 1px dashed #4ac4f3;">
                                    <a class="smooth-menu" href="{{route('blog')}}">Blog</a>
                                </li>
                                <li >
                                    <li style="border-bottom: 1px dashed #4ac4f3;">
                                    <a class="smooth-menu" href="{{route('about')}}">About</a>
                                </li>
                                <li >
                                    <li style="border-bottom: 1px dashed #4ac4f3;">
                                    <a class="smooth-menu" href="{{route('contact')}}">Contact</a>
                                </li>
                            </ul>
                        </section><!-- .widget -->
                    </div>

                    {{-- blogs start--}}

                    <div class="col-lg-2 col-md-6 item l-10">
                        <section class="site-heading ">
                            <h2 style="font-size: 18px">Recent Blogs</h2>
                            <ul>
                                <li style="border-bottom: 1px dashed #4ac4f3;">
                                    <a href="{{ route('blog1') }}"><span> 01 January, 2022</span>
                                    </a>
                                </li>

                                <li style="border-bottom: 1px dashed #4ac4f3;">
                                    <a href="{{ route('blog2') }}"><span> 01 February, 2022</span>
                                    </a>
                                </li>
                                
                                <li style="border-bottom: 1px dashed #4ac4f3;">
                                    <a href="{{ route('blog3') }}"><span> 01 March,
                                            2022</span>
                                    </a>
                                </li>
                                
                                <li style="border-bottom: 1px dashed #4ac4f3;">
                                    <a href="{{ route('blog4') }}"><span> 01 April,
                                            2022</span>
                                    </a>
                                </li>

                                <li style="border-bottom: 1px dashed #4ac4f3;">
                                    <a href="{{ route('blog5') }}"><span> 01 May,
                                            2022</span>
                                    </a>
                                </li>

                                <li style="border-bottom: 1px dashed #4ac4f3;">
                                    <a href="{{ route('blog6') }}"><span>  01 June,
                                            2022</span>
                                    </a>
                                </li>
                                
                            </ul>
                        </section><!-- .widget -->
                    </div>
                    {{-- blogs end --}}
                   
                    <div class="col-lg-4 col-md-6 item f-item">
                        <section class="site-heading address">
                            <h2 style="font-size: 18px">Contact info</h2>
                            <ul>
                                <li style="border-bottom: 1px dashed #4ac4f3;">
                                    <div class="icon">
                                        <i class="fa fa-location-arrow" aria-hidden="true"></i>
                                    </div>
                                    <div class="info">
                                        <p>Location:</p>
                                        <span>House-15, Rd 03, Block-B, Banasree, 1219
                                        </span>
                                    </div>
                                </li>
                                <li style="border-bottom: 1px dashed #4ac4f3;">
                                    <div class="icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="info">
                                        <p>Email:</p>
                                        <span>hellobizer@gmail.com</span>
                                    </div>
                                </li>
                                <li style="border-bottom: 1px dashed #4ac4f3;">
                                    <div class="icon">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <div class="info">
                                        <p>Phone:</p>
                                        <span>+44-20-7328-4499</span>
                                    </div>
                                </li>
                            </ul>
                        </section><!-- .widget -->
                    </div>
                </div>
            </div>
            <!-- Start Footer Bottom -->
            <div class="footer-bottom">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6">
                            <p>&copy; Copyright 2022, Develop by <a herf="#">HelloBizer</a></a></p>
                        </div>
                        <div class="col-lg-6 text-right link">
                            <ul>
                                <li>
                                    <a href="#">Terms of user</a>
                                </li>
                                <li>
                                    <a href="#">License</a>
                                </li>
                                <li>
                                    <a href="#">Polices</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Footer Bottom -->
        </div>
    </footer>
    <!-- End Footer -->
