@extends('frontend.layouts.main')
@section('main-content')

       <!--  ====================Start Digitam Marketing========================= -->

  
       <div id="services" class="services-area bg-theme-small default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>For Your Digital Marketing{{--  @foreach ($frontServices as $serv)  @if ($serv->id == $titles->special_service) {{$serv->title}} @endif @endforeach --}}</h2>
                        <p>Our Digital Marketing include startup business, civil society organisations, faith
                            communities,
                            faith-based organisations, businesses, academia, and more. </p>
                    </div>
                </div>
            </div>
            <div class="services-box text-center">
                <div class="row">
                    <div class="services-carosul owl-carousel owl-theme text-center">

                        <a href="{{ route('socialmediamarketing') }}">
                            <div class="single-item">
                                <div class="item">
                                    <h4><strong>Social Media Marketing</strong></h4>
                                    <p>Social media marketing is the process of utilizing any kinds of social media
                                        platforms to reach
                                        a target audience.</p> <br>
                                    <button class="btn btn-primary">Get Started</button>
                                </div>
                            </div>
                        </a>
                        <a href="{{ route('contentmarketing') }}">
                            <div class="single-item">
                                <div class="item">
                                    <h4> <strong>Content Marketing</strong></h4>
                                    <p>
                                        Our marketing strategy used to attract an audience
                                        by creating and sharing relevant articles, videos and social media.
                                    </p> <br>

                                    <button class="btn btn-primary">Get Started</button>
                                </div>
                            </div>
                        </a>

                        <a href="{{ route('emailmarketing') }}">
                            <div class="single-item">
                                <div class="item">
                                    <h4><strong>Email Marketing</strong></h4>
                                    <p>
                                        Email marketing is a powerful marketing channel,
                                        a form of direct marketing as well as digital, corporate and social marketing.
                                    </p>
                                    <br>
                                    <button class="btn btn-primary">Get Started</button>

                                </div>
                            </div>
                        </a>

                        <a href="{{ route('videomarketing') }}">
                            <div class="single-item">
                                <div class="item">
                                    <h4><strong>Video Marketing</strong></h4>
                                    <p>
                                        Our Video productio services can help direct people to your business,
                                        build your reputation and expand your sales.
                                    </p>
                                    <br>
                                    <button class="btn btn-primary">Get Started</button>
                                </div>
                            </div>
                        </a>

                        <a href="{{ route('influencermarketing') }}">
                            <div class="single-item">
                                <div class="item">
                                    <h4><strong>Influencer Marketing</strong></h4>
                                    <p>
                                        Influencer marketing is a form of marketing that enables businesses to
                                        collaborate with brand exposure to improve your company.
                                    </p>
                                    <br>
                                    <button class="btn btn-primary">Get Started</button>
                                </div>
                            </div>
                        </a>

                        <a href="{{ route('seo') }}">
                            <div class="single-item">
                                <div class="item">
                                    <h4><strong>Search Engine Optimization(SEO)</strong></h4>
                                    <p>
                                        SEO improving your website and better visibility
                                        your pages have in search results found and clicked on.
                                    </p>
                                    <br>
                                    <button class="btn btn-primary">Get Started</button>
                                </div>
                            </div>
                        </a>

                        <a href="{{ route('analyticsandtracking') }}">
                            <div class="single-item">
                                <div class="item">
                                    <h4><strong>Analytics and Tracking</strong></h4>
                                    <p>
                                        Analytics tracking enables you to
                                        identify and track contacts you can see their activities on your website.
                                    </p>
                                    <br>
                                    <button class="btn btn-primary">Get Started</button>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


<!-- End Digital marketing -->


@endsection
