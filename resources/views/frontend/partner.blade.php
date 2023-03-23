@extends('frontend.layouts.main')
@section('main-content')


       {{--========================= LOGO-Partner Start=============== --}}

    <div id="services" class="services-area bg-theme-small default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>Our Partners</h2>
                        <p>We are here to provide the services to grow your business up. Here, you can find the support
                            of Graphics, Branding, Marketing, Software’s & More</p>
                    </div>
                </div>
            </div>
            <div class="services-box text-center">
                <div class="row">
                    <div class="services-carosul owl-carousel owl-theme text-center">


                        <a href="">
                            <div class="single-item">
                                <div class="item">
                                    <img src="{{ asset('uploads/partner/pn1.png') }}" alt="">
                                </div>
                            </div>
                        </a>

                        <a href="">
                            <div class="single-item">
                                <div class="item">
                                    <img src="{{ asset('uploads/partner/pn2.png') }}" alt="">
                                </div>
                            </div>
                        </a>

                        <a href="">
                            <div class="single-item">
                                <div class="item">
                                    <img src="{{ asset('uploads/partner/pn3.png') }}" alt="">
                                </div>
                            </div>
                        </a>
                        <a href="">
                            <div class="single-item">
                                <div class="item">
                                    <img src="{{ asset('uploads/partner/pn4.png') }}" alt="">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- LOGO-Partner End --}}


@endsection
