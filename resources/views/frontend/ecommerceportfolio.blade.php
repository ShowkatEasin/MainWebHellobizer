@extends('frontend.layouts.main')
@section('main-content')

    <body>

  <!-- Start Blog
        ============================================= -->
        <div id="blog" class="blog-area bg-gray default-padding bottom-less">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="site-heading text-center">
                            <h2>E-Commerce Design and Development</h2>
                            <p>In publishing and graphic design, lorem ipsum is a filler text commonly used to demonstrate
                                the graphic elements of a document or visual presentation graphic elements of a document or visual presentation. </p>
                        </div>
                    </div>
                </div>
                <div class="blog-items">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="item">
                                <div class="thumb">
                                    <a href="{{route('allecommerce')}}">
                                        <img src="/uploads/ecommerce/ec1.webp" alt="Thumb">    
                                    </a>
                                </div>
                                <div class="info">
                                    <h4>
                                        <a href="{{route('allecommerce')}}">WEB DESIGN</a>
                                    </h4>
                                    <p style="display: block;overflow:hidden">
                                        BrandingIn marketing, branding is the use of a name, term, design, symbol, or other
                                        feature to ident...
                                        <a href="{{route('logodesign')}}">Read more</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    

                        <div class="col-lg-4 col-md-6">
                            <div class="item">
                                <div class="thumb">
                                    <a href="{{route('allecommerce')}}">
                                        <img src="/uploads/ecommerce/ec3.webp" alt="Thumb">
                                </div>
                                <div class="info">
                                    <h4>
                                        <a href="{{route('allecommerce')}}">WEB DEVELOPMENT (Dynamic)</a>
                                    </h4>
                                    <p style="display: block;overflow:hidden">
                                        BrandingIn marketing, branding is the use of a name, term, design, symbol, or other
                                        feature to ident...
                                        <a href="{{route('allecommerce')}}">Read more</a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="item">
                                <div class="thumb">
                                    <a href="{{route('allecommerce')}}">
                                        <img src="/uploads/ecommerce/ec2.webp" alt="Thumb">
                                </div>
                                <div class="info">
                                    <h4>
                                        <a href="{{route('allecommerce')}}">RESPONSIVE DESIGN</a>
                                    </h4>
                                    <p style="display: block;overflow:hidden">
                                        BrandingIn marketing, branding is the use of a name, term, design, symbol, or other
                                        feature to ident...
                                        <a href="{{route('allecommerce')}}">Read more</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                <div class="blog-items">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="item">
                                <div class="thumb">
                                    <a href="{{route('allecommerce')}}">
                                        <img src="/uploads/ecommerce/ec4.webp" alt="Thumb">    
                                    </a>
                                </div>
                                <div class="info">
                                    <h4>
                                        <a href="{{route('allecommerce')}}">WEB DESIGN</a>
                                    </h4>
                                    <p style="display: block;overflow:hidden">
                                        BrandingIn marketing, branding is the use of a name, term, design, symbol, or other
                                        feature to ident...
                                        <a href="{{route('allecommerce')}}">Read more</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    

                        <div class="col-lg-4 col-md-6">
                            <div class="item">
                                <div class="thumb">
                                    <a href="{{route('allecommerce')}}">
                                        <img src="/uploads/website/gr5.png" alt="Thumb">
                                </div>
                                <div class="info">
                                    <h4>
                                        <a href="{{route('allecommerce')}}">WEB DEVELOPMENT (Dynamic)</a>
                                    </h4>
                                    <p style="display: block;overflow:hidden">
                                        BrandingIn marketing, branding is the use of a name, term, design, symbol, or other
                                        feature to ident...
                                        <a href="{{route('allecommerce')}}">Read more</a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="item">
                                <div class="thumb">
                                    <a href="{{route('allecommerce')}}">
                                        <img src="/uploads/website/gr6.png" alt="Thumb">
                                </div>
                                <div class="info">
                                    <h4>
                                        <a href="{{route('allecommerce')}}">RESPONSIVE DESIGN</a>
                                    </h4>
                                    <p style="display: block;overflow:hidden">
                                        BrandingIn marketing, branding is the use of a name, term, design, symbol, or other
                                        feature to ident...
                                        <a href="{{route('allecommerce')}}">Read more</a>
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


                                        <a href="{{route('allecommerce')}}" rel="next"
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
        </div>
        </div>

    </body>
    <!-- End Blog -->
@endsection
