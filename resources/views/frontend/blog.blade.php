@extends('frontend.layouts.main')
@section('main-content')

          <!-- Start Blog
    ============================================= -->
    <div id="blog" class="blog-area bg-gray default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                <h2>Our Recent Blogs</h2>
                    <p>A blog is an informational website published on the World Wide Web consisting of discrete, often informal diary-style text entries. Posts are typically displayed in reverse chronological
                         order so that the most recent post appears first, at the top of the web page.</p>
                    </div>
                </div>
            </div>
            <div class="blog-items">
                <div class="row">
                        <div class="col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <a href="{{route('blog1')}}">
                                    <img src="uploads/blog/large/1666435968.jpg" alt="Thumb">
                                    <div class="post-type">
                                        <i class="fas fa-image"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="info">
                                <h4>
                                    <a href="http://127.0.0.1:8000/news/graphics-design-2">Digital Marketing</a>
                                </h4>
                                <div class="meta">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-calendar-alt "></i>  22 Oct, 2022</a></li>
                                        <li><a href="http://127.0.0.1:8000/category/graphic-design"><i class="fas fa-flag"></i> Graphic Design</a></li>
                                    </ul>
                                </div>
                                <p style="display: block;overflow:hidden">
                                    BrandingIn marketing, branding is the use of a name, term, design, symbol, or other feature to ident...
                                    <a href="http://127.0.0.1:8000/news/graphics-design-2">Read more</a>
                                </p>
                            </div>
                        </div>
                    </div>
                      <div class="col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <a href="{{route('blog2')}}">
                                    <img src="uploads/blog/large/1665921616.jpg" alt="Thumb">
                                    <div class="post-type">
                                        <i class="fas fa-image"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="info">
                                <h4>
                                    <a href="{{route('blog2')}}">Web Design & Development</a>
                                </h4>
                                <div class="meta">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-calendar-alt "></i>  22 Oct, 2022</a></li>
                                        <li><a href="{{route('blog2')}}"><i class="fas fa-flag"></i> Graphic Design</a></li>
                                    </ul>
                                </div>
                                <p style="display: block;overflow:hidden">
                                    BrandingIn marketing, branding is the use of a name, term, design, symbol, or other feature to ident...
                                    <a href="http://127.0.0.1:8000/news/graphics-design-2">Read more</a>
                                </p>
                            </div>
                        </div>
                    </div>
                                        <div class="col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <a href="{{route('blog3')}}">
                                    <img src="http://127.0.0.1:8000/uploads/blog/large/blogs3.jpg" alt="Thumb">
                                    <div class="post-type">
                                        <i class="fas fa-image"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="info">
                                <h4>
                                    <a href="{{route('blog3')}}">Graphics Design</a>
                                </h4>
                                <div class="meta">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-calendar-alt "></i>  22 Oct, 2022</a></li>
                                        <li><a href="http://127.0.0.1:8000/category/graphic-design"><i class="fas fa-flag"></i> Graphic Design</a></li>
                                    </ul>
                                </div>
                                <p style="display: block;overflow:hidden">
                                    BrandingIn marketing, branding is the use of a name, term, design, symbol, or other feature to ident...
                                    <a href="{{route('blog3')}}">Read more</a>
                                </p>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <a href="{{route('blog4')}}">
                                    <img src="uploads/blog/large/blogs4.jpg" alt="Thumb">
                                    <div class="post-type">
                                        <i class="fas fa-image"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="info">
                                <h4>
                                    <a href="{{route('blog4')}}">Social Media Marketing</a>
                                </h4>
                                <div class="meta">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-calendar-alt "></i>  22 Oct, 2022</a></li>
                                        <li><a href="http://127.0.0.1:8000/category/graphic-design"><i class="fas fa-flag"></i> Graphic Design</a></li>
                                    </ul>
                                </div>
                                <p style="display: block;overflow:hidden">
                                    BrandingIn marketing, branding is the use of a name, term, design, symbol, or other feature to ident...
                                    <a href="{{route('blog4')}}">Read more</a>
                                </p>
                            </div>
                        </div>
                    </div>
                                        <div class="col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <a href="{{route('blog5')}}">
                                    <img src="uploads/blog/large/blogs5.jpg" alt="Thumb">
                                    <div class="post-type">
                                        <i class="fas fa-image"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="info">
                                <h4>
                                    <a href="{{route('blog5')}}">Software Development</a>
                                </h4>
                                <div class="meta">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-calendar-alt "></i>  22 Oct, 2022</a></li>
                                        <li><a href="http://127.0.0.1:8000/category/graphic-design"><i class="fas fa-flag"></i> Graphic Design</a></li>
                                    </ul>
                                </div>
                                <p style="display: block;overflow:hidden">
                                    BrandingIn marketing, branding is the use of a name, term, design, symbol, or other feature to ident...
                                    <a href="{{route('blog5')}}">Read more</a>
                                </p>
                            </div>
                        </div>
                    </div>
                      <div class="col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <a href="{{route('blog6')}}">
                                    <img src="uploads/blog/large/blogs6.jpg" alt="Thumb">
                                    <div class="post-type">
                                        <i class="fas fa-image"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="info">
                                <h4>
                                    <a href="http://127.0.0.1:8000/news/graphics-design-2">Business Consultancy</a>
                                </h4>
                                <div class="meta">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-calendar-alt "></i>  22 Oct, 2022</a></li>
                                        <li><a href="http://127.0.0.1:8000/category/graphic-design"><i class="fas fa-flag"></i> Graphic Design</a></li>
                                    </ul>
                                </div>
                                <p style="display: block;overflow:hidden">
                                    BrandingIn marketing, branding is the use of a name, term, design, symbol, or other feature to ident...
                                    <a href="http://127.0.0.1:8000/news/graphics-design-2">Read more</a>
                                </p>
                            </div>
                        </div>
                    </div>
  
                    <div class="col-lg-12 col-md-12 pagi-area">
                        <nav aria-label="navigation">
                            <ul class="pagination">
                                <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-between">
        
                    <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md">
                &laquo; Previous
            </span>
        
        
                    <a href="http://127.0.0.1:8000/news?page=2" rel="next" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
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
    <!-- End Blog -->

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



@endsection
