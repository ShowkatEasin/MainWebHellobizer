@extends('frontend.layouts.main')
@section('main-content')

      <!--  ====================Start Digitam Marketing========================= -->

@if ($titles->special_service > 0)
<div id="services" class="services-area bg-theme-small default-padding bottom-less">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="site-heading text-center">
                    <h2>For Your Digital Marketing{{--  @foreach ( $frontServices as $serv)  @if ($serv->id == $titles->special_service) {{$serv->title}} @endif @endforeach --}}</h2>
                    <p>Our Digital Marketing include startup business, civil society organisations, faith communities,
                         faith-based organisations, businesses, academia, and more. </p>
                </div>
            </div>
        </div>
        <div class="services-box text-center">
            <div class="row">
                <div class="services-carosul owl-carousel owl-theme text-center">
              
                    <a href="{{route('socialmediamarketing')}}">
                        <div class="single-item">
                            <div class="item">
                                <h3>Social Media Marketing</h3>
                                <p>Social media marketing is the process of utilizing any kinds of social media platforms to reach 
                                     a target audience.</p> <br>
                                     <button class="btn btn-primary">Get Started</button>
                            </div>
                        </div>
                    </a>
                    <a href="{{route('contentmarketing')}}">
                        <div class="single-item">
                            <div class="item">
                                <h3>Content Marketing</h3>
                                <p>
                                    Our marketing strategy used to attract an audience
                                     by creating and sharing relevant articles, videos and media.
                                </p>  <br>
                                
                                <button class="btn btn-primary">Get Started</button>
                            </div>
                        </div>
                    </a>

                    <a href="{{route('emailmarketing')}}">
                        <div class="single-item">
                            <div class="item">
                                <h3>Email Marketing</h3>
                                <p>
                                    Email marketing is a powerful marketing channel,
                                     a form of direct marketing as well as digital, corporate and social marketing.
                                </p>
                                <br>
                                <button class="btn btn-primary">Get Started</button>

                            </div>
                        </div>
                    </a>

                    <a href="{{route('videomarketing')}}">
                        <div class="single-item">
                            <div class="item">
                                <h3>Video Marketing</h3>
                                <p>
                                   Our Video productio services can help direct people to your business,
                                   build your reputation and expand your sales.
                                </p>
                                <br>
                                <button class="btn btn-primary">Get Started</button>
                            </div>
                        </div>
                    </a>

                    <a href="{{route('influencermarketing')}}">
                        <div class="single-item">
                            <div class="item">
                                <h3>Influencer Marketing</h3>
                                <p>
                                    Influencer marketing is a form of marketing that enables businesses to
                                     collaborate with brand exposure.
                                </p>
                                <br>
                                <button class="btn btn-primary">Get Started</button>
                            </div>
                        </div>
                    </a>

                    <a href="{{route('seo')}}">
                        <div class="single-item">
                            <div class="item">
                                <h3>Search Engine Optimization(SEO)</h3>
                                <p>
                                     SEO improving your website and better visibility
                                     your pages have in search results found and clicked on.
                                </p>
                                <br>
                                <button class="btn btn-primary">Get Started</button>
                            </div>
                        </div>
                    </a>

                    <a href="{{route('analyticsandtracking')}}">
                        <div class="single-item">
                            <div class="item">
                                <h3>Analytics and Tracking</h3>
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
@endif

<!-- End Digital marketing -->


@endsection
