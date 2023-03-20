@extends('frontend.layouts.main')
@section('main-content')

        <!--======================Start Services======================= -->
    <div id="services" class="services-area bg-theme-small default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>What We Offer</h2>
                        <p>We are here to provide the services to grow your business up. Here, you can find the support
                            of Graphics, Branding, Marketing, Software’s & More</p>
                    </div>
                </div>
            </div>
            <div class="services-box text-center">
                <div class="row">
                    <div class="services-carosul owl-carousel owl-theme text-center">
                        <!-- Single Item -->

                        @foreach ($frontServices as $serv)
                        @if ($serv->parent_id == NULL)

                        @endif
                        @endforeach
                        <!-- End Single Item -->
                       {{-- Add new 8 point Here --}}

                                      <a href="{{route('videomaking')}}">
                                        <div class="single-item">
                                            <div class="item">
                                                <img src="{{asset('uploads/service/icon/videoicon.png')}}" alt="">
                                                <h5>Video Making</h5>
                                                <p>
                                                    Elevate your brand's visual story telling with our expert and professional video-making services for your company.
                                                </p>
                                            </div>
                                        </div>
                                    </a> 
                                    <a href="{{route('softwaredevelopment')}}">
                                        <div class="single-item">
                                            <div class="item">
                                                <img src="{{asset('uploads/service/icon/softicon.png'/* .$serv->ico */)}}" alt="">
                                                <h5>Software Development</h5>
                                                <p>
                                                    Transform your business with our expert software development services. Our team creates custom software solutions.
                                                    {{-- {{ Str::limit(strip_tags( $serv->description)) }} --}}
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="{{route('businessconsultancy')}}">
                                        <div class="single-item">
                                            <div class="item">
                                                <img src="{{asset('uploads/service/icon/businessicon.png'/* .$serv->ico */)}}" alt="">
                                                <h5>Business Consultancy</h5>
                                                <p>
                                                    Unlock your business's full potential with our expert business consultancy services to improve your company.
                                                   {{--  {{ Str::limit(strip_tags( $serv->description)) }} --}}
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                
                                    <a href="{{route('digitalmarketing')}}">
                                        <div class="single-item">
                                            <div class="item">
                                                <img src="{{asset('uploads/service/icon/branding.png'/* .$serv->ico */)}}" alt="">
                                                <h5>Digital Marketing</h5>
                                                <p>
                                                    Grow your business and reach your target audience with our comprehensive digital marketing services for your Company. 
                                                    {{-- {{ Str::limit(strip_tags( $serv->description)) }} --}}
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="{{route('graphicsdesign')}}">
                                        <div class="single-item">
                                            <div class="item">
                                                <img src="{{asset('uploads/service/icon/graphic.png'/* .$serv->ico */)}}" alt="">
                                                <h5>Graphics Design
                                                </h5>
                                                <p>
                                                    Elevate your brand's visual identity with our expert and professional graphic design services as your requirements. 
                                                    {{-- {{ Str::limit(strip_tags( $serv->description)) }} --}}
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                  <a href="{{route('webdesignanddevelopment')}}">
                                        <div class="single-item">
                                            <div class="item">
                                                <img src="{{asset('uploads/service/icon/web.png'/* .$serv->ico */)}}" alt="">
                                                <h5>Web Design & Development</h5>
                                                <p>
                                                    Transform your online presence with our professional website design and development services. 
                                                    {{-- {{ Str::limit(strip_tags( $serv->description)) }} --}}
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="{{route('socialmedia')}}">
                                        <div class="single-item">
                                            <div class="item">
                                                <img src="{{asset('uploads/service/icon/digital.png'/* .$serv->ico */)}}" alt="">
                                                <h5>Social Media Setup & Monitoring</h5>
                                                <p>
                                                    We provide the best services for Social Media Setup is a crucial component of any digital marketing strategy. 
                                                   {{--  {{ Str::limit(strip_tags( $serv->description)) }} --}}
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="{{route('appdesign')}}">
                                        <div class="single-item">
                                            <div class="item">
                                                <img src="{{asset('uploads/service/icon/app.png'/* .$serv->ico */)}}" alt="">
                                                <h5>App Design & Development</h5>
                                                <p>
                                                    This services that deliver innovative and user-friendly mobile applications for businesses.
                                                   {{--  {{ Str::limit(strip_tags( $serv->description)) }} --}}
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                        {{-- End new 8 --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Services -->


@endsection
