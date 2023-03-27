@extends('frontend.layouts.main')
@section('frontcss')
    <style>
        /* .no-background .nav  li a{
                color:white!important;
            }
            .no-background .nav .dropdown-menu li a{
                color: #333333!important;
            } */
    </style>
@stop
@section('main-content')

    <br>
    <br>
    <br>

    <!-- Start Banner
        ============================================= -->
    <div class="banner-area shape-index transparent-nav content-double text-medium">
        <div class="box-table">
            <div class="box-cell">
                <div class="container">
                    <div class="double-items thumb-140">
                        <div class="row align-center">
                            <div class="col-lg-6 left-info simple-video">
                                <div class="content" data-animation="animated fadeInUpBig">
                                    <h2>Make <span>E-Commerce</span> for your Company</h2>
                                    <p>We specialize in providing one-stop solutions for all your business needs. With our
                                        innovative solutions,
                                        expert team, and cutting-edge technologies expert team.
                                    </p>
                                    <a href=" {{route('contact')}}">
                                        <button class="btn btn-primary">Talk With Our Cutomer Support Team</button>
                                    </a>
                                   

                                </div>
                            </div>
                            <div class="col-lg-6 right-info">
                                <img src="/uploads/ecommerce/ec1.webp" alt="Thumb">
                            </div>
                           
                        </div>
                    </div>
                </div>
                <div class="wavesshape">
                    <img src="assets/img/shape/1.png" alt="Shape">
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->
    <!-- Start Banner
        ============================================= -->
    <div class="banner-area shape-index transparent-nav content-double text-medium">
        <div class="box-table">
            <div class="box-cell">
                <div class="container">
                    <div class="double-items thumb-140">
                        <div class="row align-center">
                            <div class="col-lg-6 left-info simple-video">
                                <div class="content" data-animation="animated fadeInUpBig">
                                    <h2>Make <span>E-Commerce</span> for your Company</h2>
                                    <p>We specialize in providing one-stop solutions for all your business needs. With our
                                        innovative solutions,
                                        expert team, and cutting-edge technologies expert team.
                                    </p>
                                    <a href="">
                                        <button class="btn btn-primary">Talk With Our Cutomer Support Team</button>
                                    </a>
                                   

                                </div>
                            </div>
                            <div class="col-lg-6 right-info">
                                <img src="/uploads/ecommerce/ec2.webp" alt="Thumb">
                            </div>
                           
                        </div>
                    </div>
                </div>
                <div class="wavesshape">
                    <img src="assets/img/shape/1.png" alt="Shape">
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->


    <!--====================== Start Banner ======================= -->
    
    <div class="banner-area shape-index transparent-nav content-double text-medium">
        <div class="box-table">
            <div class="box-cell">
                <div class="container">
                    <div class="double-items thumb-140">
                        <div class="row align-center">
                            <div class="col-lg-6 left-info simple-video">
                                <div class="content" data-animation="animated fadeInUpBig">
                                    <h2>Make <span>Ecommerce</span> for your Company</h2>
                                    <p>We specialize in providing one-stop solutions for all your business needs. With our
                                        innovative solutions,
                                        expert team, and cutting-edge technologies expert team.
                                    </p>
                                    <a href="">
                                        <button class="btn btn-primary">Talk With Our Cutomer Support Team</button>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 right-info">
                                <img src="/uploads/website/gr6.png" alt="Thumb">
                            </div>
                           
                        </div>
                    </div>
                </div>
                <div class="wavesshape">
                    <img src="assets/img/shape/1.png" alt="Shape">
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->
    <!-- Start Banner
        ============================================= -->
    <div class="banner-area shape-index transparent-nav content-double text-medium">
        <div class="box-table">
            <div class="box-cell">
                <div class="container">
                    <div class="double-items thumb-140">
                        <div class="row align-center">
                            <div class="col-lg-6 left-info simple-video">
                                <div class="content" data-animation="animated fadeInUpBig">
                                    <h2>Make <span>E-Commerce</span> for your Company</h2>
                                    <p>We specialize in providing one-stop solutions for all your business needs. With our
                                        innovative solutions,
                                        expert team, and cutting-edge technologies expert team.
                                    </p>
                                    <a href="">
                                        <button class="btn btn-primary">Talk With Our Cutomer Support Team</button>
                                    </a>
                                   

                                </div>
                            </div>
                            <div class="col-lg-6 right-info">
                                <img src="/uploads/ecommerce/ec4.webp" alt="Thumb">
                            </div>
                           
                        </div>
                    </div>
                </div>
                <div class="wavesshape">
                    <img src="assets/img/shape/1.png" alt="Shape">
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->



    


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


   

          

    
    @include('frontend.getintouch')
    <!-- End Contact -->
@endsection
