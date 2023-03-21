<!-- Start Footer
    ============================================= -->
    <footer class="footer-padding bg-light">
        <div class="container ml-10px">
            <div class="f-items">
                <div class="row ml-">
                    <div class="col-lg-3 col-md-6 item">
                        <div class="f-item">
                            <img src="{{asset('assets/img/light-logo.png')}}" alt="Logo">
                            <br>
                         
                            <h4>Social Address</h4>
                                <ul class="social">

                                    {!! $titles->social !!}
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
                                    <a class="smooth-menu" href="{{route('service')}}">Blog January 2023</a>
                                </li>
                                <li style="border-bottom: 1px dashed #4ac4f3;">
                                    <a class="smooth-menu" href="{{route('portfolio')}}">Blog February 2023</a>
                                </li>
                                <li style="border-bottom: 1px dashed #4ac4f3;">
                                    <a class="smooth-menu" href="{{route('partner')}}">Blog March 2023</a>
                                </li>
                                <li style="border-bottom: 1px dashed #4ac4f3;">
                                    <a class="smooth-menu" href="{{route('career')}}">Blog April 2023</a>
                                </li>
                                <li style="border-bottom: 1px dashed #4ac4f3;">
                                    <a class="smooth-menu" href="{{route('blog')}}">Blog May 2023</a>
                                </li>
                                <li >
                                    <li style="border-bottom: 1px dashed #4ac4f3;">
                                    <a class="smooth-menu" href="{{route('about')}}">Blog June 2023</a>
                                </li>
                                <li >
                                    <li style="border-bottom: 1px dashed #4ac4f3;">
                                    <a class="smooth-menu" href="{{route('contact')}}">Blog July 2023</a>
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
                                        <span>support@validtheme.com</span>
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
