<!-- Start Footer
    ============================================= -->
    <footer class="footer-padding bg-light">
        <div class="container ml-10px">
            <div class="f-items">
                <div class="row ml-">
                    <div class="col-lg-3 col-md-6 item">
                        <div class="f-item">
                            <img src="{{asset('assets/img/light-logo.png')}}" alt="Logo">
                            <p>One Stop Solutions for your business.</p>
                            
                            <p>We specialize in providing one-stop solutions for all your business needs.</p>
                         
                            
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
                                    <a href="{{ route('blog1') }}"><span>Blog : 01 Jan, 2022</span>
                                    </a>
                                </li>

                                <li style="border-bottom: 1px dashed #4ac4f3;">
                                    <a href="{{ route('blog2') }}"><span>Blog : 01 Feb, 2022</span>
                                    </a>
                                </li>
                                
                                <li style="border-bottom: 1px dashed #4ac4f3;">
                                    <a href="{{ route('blog3') }}"><span> Blog : 01 Mar,
                                            2022</span>
                                    </a>
                                </li>
                                
                                <li style="border-bottom: 1px dashed #4ac4f3;">
                                    <a href="{{ route('blog4') }}"><span> Blog : 01 Apr,
                                            2022</span>
                                    </a>
                                </li>

                                <li style="border-bottom: 1px dashed #4ac4f3;">
                                    <a href="{{ route('blog5') }}"><span> Blog : 01 May,
                                            2022</span>
                                    </a>
                                </li>

                                <li style="border-bottom: 1px dashed #4ac4f3;">
                                    <a href="{{ route('blog6') }}"><span> Blog : 01 Jun,
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
                                        <span>{{$titles->address}}
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
