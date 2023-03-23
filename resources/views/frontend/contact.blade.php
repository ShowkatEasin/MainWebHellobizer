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
            <div class="box">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form action="" method="POST">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="form-group">
                                        <label for="name">
                                            <h4>Enter Your Full Name</h4>
                                        </label>
                                        <input class="form-control" id="name" name="name"
                                            placeholder="Example : Adnan Rahman" type="text" required>
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="form-group">
                                        <label for="email">
                                            <h4>Enter Your Email</h4>
                                        </label>
                                        <input class="form-control" id="email" name="email"
                                            placeholder="Example : hellobizer@gmail.com*" type="email" required>
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="form-group">
                                        <label for="phone">
                                            <h4>Enter Your Phone</h4>
                                        </label>
                                        <input class="form-control" id="phone" name="phone"
                                            placeholder="Example : +8801646962234" type="text" required>
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="form-group">
                                        <label for="website">
                                            <h4>Enter Your Website</h4>
                                        </label>
                                        <input class="form-control" id="phone" name="phone"
                                            placeholder="Example : www.hellobizer.com" type="text" required>
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label for="date">
                                        <h4>Your Convenient Date</h4>
                                    </label>
                                    <input type="date" class="form-control" placeholder="Example : 22-03-2023">
                                </div>
                                <div class="col">
                                    <label for="time">
                                        <h4>Your Convenient Time</h4>
                                    </label>
                                    <input type="time" class="form-control" placeholder="Example : 4:00 PM">
                                    <br>
                                </div>
                            </div>

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

                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="form-group comments">
                                        <label for="text">
                                            <h4>Your Message</h4>
                                        </label>
                                        <textarea class="form-control" id="message" name="message" placeholder="Tell Us About Project *" rows="4"
                                            cols="50"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <button type="submit" name="submit" id="submit c">
                                        Send Message <i class="fa fa-paper-plane"></i>
                                    </button>
                                    <br>
                                </div>
                            </div>
                            <!-- Alert Message -->
                            <div class="col-lg-12 alert-notification">
                               {{--  @if (Session::has('success'))
                                    <p>{!! Session('success') !!}</p>
                                @endif --}}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- End Contact -->

         {{--   Get in Touch Start --}}

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
                                            <li>Facebook</li>
                                            <li>Instagram</li>
                                            <li>Twitter</li>    
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
