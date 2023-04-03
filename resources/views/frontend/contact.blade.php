@extends('frontend.layouts.main')
@section('main-content')
   
    <!--======================== Start Contact Area  ============================================= -->
    <div id="contact" class="contact-us-area default-padding bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>Find Out how we can grow your Business</h2>
                        <p>
                            Schedule a meeting to discuss how <strong></strong> can help you to double, triple or quadruple
                            your sales and revenue.
                            So, tell us what you want – simply fill in the form below and we’ll be in touch with you shortly
                            😎
                            Phone: +88012345678
                        </p>
                    </div>
                </div>
            </div>

           {{-- Form Start--}}

           <div class="row">
            <!-- <div class="form-header">
                    <h3>Schedule a Brief Meeting to Discuss

                    </h3>
                </div> -->
            <div class="pricing-item">
                <ul>
                    <li class="pricing-header">
                        <h2>Schedule a Brief Meeting to Discuss</h2>
                        @if (Session::has('success'))
                            <p style="font-size: 20px; color: green;padding-top: 20px;">{!! Session('success') !!}</p>
                        @endif
                    </li>
                    <form action="{{ route('freequotesend') }}" class="free-quote" method="POST">
                        @csrf

                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <input type="text" class="form-control" placeholder="Your Name"name="name" required>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <input type="text" class="form-control" placeholder="Phone Number" name="phone" required>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <input type="email" class="form-control" placeholder="Email Address" name="email" required>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <input type="text" class="form-control" placeholder="Facebook Page/Website Url"
                                    name="url" required>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <select name="mainservice" id="mainservice" class="form-control" rel="2" required>
                                    <option value="" style="display: none" selected>Select Services</option>
                                    @foreach ($frontServices as $service)
                                        @if ($service->parent_id == null)
                                            <option value="{{ $service->id }}" rel="{{ $service->id }}"
                                                class="mainservice"> {{ $service->title }}</option>
                                        @endif
                                    @endforeach


                                </select>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <select name="subservice" id="subservice" class="form-control">


                                </select>
                            </div>
                            <div class="col-md-12 col-lg-12">
                                <textarea class="form-control" id="comments" name="comments" placeholder="Tell Us About Project *" rows="5"></textarea>
                            </div>
                        </div>
                        <br>

                         {{-- ================checkbox Start================ --}}

                         <form>
                            <fieldset>
                                <legend>Are you interested in?</legend>
                                <div>
                                    <input type="checkbox" id="instagram" name="source" value="instagram">
                                    <label for="instagram">SEO</label> &nbsp; &nbsp; 

                                    <input type="checkbox" id="facebook" name="source" value="facebook">
                                    <label for="facebook">Website </label>  &nbsp; &nbsp;

                                    <input type="checkbox" id="facebook" name="source" value="facebook">
                                    <label for="facebook">Software</label>  &nbsp; &nbsp;

                                    <input type="checkbox" id="facebook" name="source" value="facebook">
                                    <label for="facebook">Digital marketing</label>  &nbsp; &nbsp;

                                    <input type="checkbox" id="facebook" name="source" value="facebook">
                                    <label for="facebook">Video making</label>  &nbsp; &nbsp;

                                    <input type="checkbox" id="facebook" name="source" value="facebook">
                                    <label for="facebook">Business Consultancy</label>  &nbsp; &nbsp;
                                </div>
                            </fieldset>
                        </form>
                        <br>

                        {{-- ================checkbox End================ --}}
                        <li class="footer">
                            <button class="btn circle btn-theme border btn-sm">Send</button>
                        </li>
                    </form>

                </ul>
            </div>
        </div>
    </div>
</div>

         <div id="services" class="services-area bg-theme-small default-padding bottom-less">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="site-heading text-center">
                            <h2>Get in Touch</h2>      
                        </div>
                    </div>
                </div>
                <div class="services-box text-center">
                    <div class="row">
                        <div class="services-carosul owl-carousel owl-theme text-center">

                            <a href="">
                                <div class="single-item">
                                    <div class="item">
                                        <h3><strong>Location</strong></h3>
                                        <p> Block-B, House-15 Rd 03, Rampura, banasree Dhaka 1219</p>          
                                    </div>
                                </div>
                            <a href="">
                                <div class="single-item">
                                    <div class="item">
                                        <h3><strong>Contact us</strong></h3>
                                        <p> Email: support@hellobizer.com Phone: +88 01706-575871</p>            
                                    </div>
                                </div>
                            <a href="">
                                <div class="single-item">
                                    <div class="item">
                                        <h3><strong>Our Hours</strong></h3>
                                        <p>We are open six days a week
                                            SAT-THUR 10:00 am – 07:00 pm
                                            (GMT 6+)</p>         
                                    </div>
                                </div>
                            </a>
                            <a href="">
                                <div class="single-item">
                                    <div class="item">
                                        <h3><strong>Social</strong></h3>
                                      
                                        <ul>
                                            <li>
                                                <i class="fab fa-facebook-f fa-2x" style="color: #3b5998;"></i>&nbsp; 
                                                <i class="fab fa-instagram fa-2x" style="color: #ac2bac;"></i>&nbsp; 
                                                <i class="fab fa-linkedin-in fa-2x" style="color: #0082ca;"></i>&nbsp; 
                                                <i class="fab fa-whatsapp fa-2x" style="color: #25d366;"></i> &nbsp;
                                                <i class="fab fa-youtube fa-2x" style="color: #ed302f;"></i>
                                            </li>
                                          </ul>
                                            
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
        {{--   Get in Touch End --}}

       <!-- Start Contact Area
    ============================================= -->
    <div id="contact" class="contact-us-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>Contact Us</h2>
                        <p>
                            Learning day desirous informed expenses material returned six the. She enabled invited
                            exposed him another. Reasonably conviction solicitude me mr at discretion reasonable. Age
                            out full gate bed day lose.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 address">
                    <div class="address-items">
                        <div class="google-maps">
                            {!! $titles->map !!}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2>Quik Contact</h2>
                    <form action="{{ route('sendmessage') }}" method="POST">
                        @csrf
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="form-group">
                                    <input class="form-control" id="name" name="name" placeholder="Name"
                                        type="text" required>
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="row">
                                <div class="form-group">
                                    <input class="form-control" id="phone" name="phone" placeholder="Phone"
                                        type="text" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="form-group comments">
                                    <textarea class="form-control" id="message" name="message" placeholder="Tell Us About Project *" rows="4"
                                        cols="50"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="row">
                                <button type="submit" name="submit" class="button">
                                    Send Message <i class="fa fa-paper-plane"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- End Contact -->
    @endsection
