@extends('frontend.layouts.main')
@section('main-content')
    <!-- Start Blog
            ============================================= -->
    <div id="blog" class="blog-area bg-gray full-width single default-padding">
        <div class="container">
            <div class="row">

                <div class="col-xl-9 col-lg-8">
                    <div class="item">
                        <div class="thumb">
                            <a href="#">
                                <img src="uploads/blog/large/blogs6.jpg" alt="Thumb">
                                <div class="post-type">
                                    <i class="fas fa-images"></i>
                                </div>
                            </a>
                        </div>
                        <div class="info">
                            <h3>
                                <a href="#">Business Consultancy</a>
                            </h3>
                            <div class="meta">
                                <ul>
                                    <li><a href="#"><i class="fas fa-calendar-alt "></i> 01 Jun, 2022</a></li>
                                    <li><a href="#"><i class="fas fa-flag"></i>Business Consultancy</a></li>
                                </ul>
                            </div>
                            <h2
                                style="margin-top: 0.5rem; margin-bottom: 1rem; font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-weight: 500; line-height: 1.2; color: rgb(51, 51, 51); font-size: 2.5rem; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; text-align: start;">
                                <span style="font-weight: bolder;">Branding</span>
                            </h2>
                            <p>In marketing, branding is the use of a name, term, design,
                                symbol, or other feature to identify a product or service and distinguish it from those
                                of other producers. The key components of a brand include the brand name, brand logo,
                                brand identity, and brand messaging.</p>

                            <br>
                            <h2
                                style="margin-top: 0.5rem; margin-bottom: 1rem; font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-weight: 500; line-height: 1.2; color: rgb(51, 51, 51); font-size: 2rem; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; text-align: start;">
                                <span style="font-weight: bolder;">The importance of Branding&nbsp;</span>
                            </h2>
                            <p>
                                Branding is an important part of any business, large or
                                small. A strong brand can help a company to stand out in a crowded marketplace, build
                                customer trust and loyalty, and increase its value. Branding can also be a major
                                liability if not done correctly, so it is important to understand the process and how to
                                do it correctly.</p>

                            <br>

                            <p>The process of branding starts with research to understand
                                the customer, the competition, and the company’s strengths and weaknesses. This is
                                followed by the development of a brand strategy, which includes the selection of a brand
                                name, logo, and identity. The brand strategy is then implemented through marketing
                                communications, such as advertising, public relations, and social media.</p>
                            <p>
                                When done correctly, branding can be a powerful tool for any
                                business. Understanding the process and how to do it correctly is essential for any
                                company looking to create a strong brand.</p>
                                <br>

                            <h2
                                style="margin-top: 0.5rem; margin-bottom: 1rem; font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-weight: 500; line-height: 1.2; color: rgb(51, 51, 51); font-size: 2rem; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; text-align: start;">
                                <span style="font-weight: bolder;">There are many benefits to branding, including the
                                    ability to:</span>
                            </h2>
                            <br>

                            <p>
                                <span>1.</span> Create customer loyalty: Customers who are loyal to a
                                brand are more likely to continue buying from that brand in the future, even when
                                other options are available.
                            </p>
                            <br>


                            <p>
                                <span>2.</span> Create customer loyalty: Customers who are loyal to a
                                brand are more likely to continue buying from that brand in the future, even when
                                other options are available.
                            </p>
                            <br>

                            <p>
                                <span>3.</span> Create customer loyalty: Customers who are loyal to a
                                brand are more likely to continue buying from that brand in the future, even when
                                other options are available.
                            </p>
                            <br>


                            <p>
                                <span>4.</span> Create customer loyalty: Customers who are loyal to a
                                brand are more likely to continue buying from that brand in the future, even when
                                other options are available.
                            </p>
                            <br>





                            <div class="post-pagi-area">
                                <a href="{{route('blog5')}}" class="float-left"><i class="fas fa-arrow-left"></i> Previous Post</a>
                                <a href="{{ route('blog1') }}" class="float-right">Next Post <i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 sidebar">
                    <div class="info">
                        <section class="site-heading">
                            <h2 style="font-size: 20px">Categories</h2>
                            <ul>
                                <li style="border-bottom: 1px dashed #4ac4f3; "><a href="{{ route('blog1') }}">Digital
                                        Marketing</a></li>
                                <li style="border-bottom: 1px dashed #4ac4f3; "><a href="{{ route('blog2') }}">Web Design &
                                        Development</a></li>
                                <li style="border-bottom: 1px dashed #4ac4f3; "><a href="{{ route('blog3') }}">Graphics
                                        Design</a></li>
                                <li style="border-bottom: 1px dashed #4ac4f3; "><a href="{{ route('blog4') }}">Social Media
                                        Marketing</a></li>
                                <li style="border-bottom: 1px dashed #4ac4f3; "><a href="{{ route('blog5') }}">Software
                                        Development</a></li>
                                <li style="border-bottom: 1px dashed #4ac4f3; "><a href="{{ route('blog6') }}">Business
                                        Consultancy</a></li>
                            </ul>
                        </section><!-- .widget -->
                    </div>
                    <div class="info mt-5">
                        <section class="site-heading">
                            <h2 style="font-size: 20px">Recent Post</h2>
                            <ul>
                                <li style="border-bottom: 1px dashed #4ac4f3;">
                                    <a href="{{ route('blog1') }}">Digital Marketing
                                        <br><span>01 Jan, 2022</span>
                                    </a>
                                </li>
                                <li style="border-bottom: 1px dashed #4ac4f3;">
                                    <a href="{{ route('blog2') }}">Web Design & Development<br><span>01 Feb, 2022</span>
                                    </a>
                                </li>
                                <li style="border-bottom: 1px dashed #4ac4f3;">
                                    <a href="{{ route('blog3') }}">Graphics Design<br><span>01 Mar,
                                            2022</span>
                                    </a>
                                </li>
                                <li style="border-bottom: 1px dashed #4ac4f3;">
                                    <a href="{{ route('blog4') }}">Social Media Marketing<br><span>01 Apr,
                                            2022</span>
                                    </a>
                                </li>
                                <li style="border-bottom: 1px dashed #4ac4f3;">
                                    <a href="{{ route('blog5') }}">Software Development<br><span>01 May,
                                            2022</span>
                                    </a>
                                </li>
                                <li style="border-bottom: 1px dashed #4ac4f3;">
                                    <a href="{{ route('blog6') }}">Business Consultancy<br><span>01 Jun,
                                            2022</span>
                                    </a>
                                </li>


                            </ul>
                        </section><!-- .widget -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->
@endsection
