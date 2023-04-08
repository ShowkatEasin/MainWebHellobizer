<header id="home">

    <!-- Start Navigation -->
    <nav class="navbar navbar-default navbar-fixed dark no-background bootsnav">

        <div class="container">

            <!-- Start Atribute Navigation -->
            <div class="attr-nav button">
                <ul>
                    <li>
                        <a href="{{route('quote')}}">free quote</a>
                    </li>
                </ul>
            </div>
            <!-- End Atribute Navigation -->

            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="/">
                    <img src="{{asset('assets/img/light-logo.png')}}" class="logo logo-scrolled" alt="Logo">
                </a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->

            

            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">

                    
            

                    <li class="nav-item dropdown">    
                        <a href="{{route('service')}}" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Service</a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            
                            <li><a class="dropdown-item" href="{{route('graphicsdesign')}}">Graphic Design</a></li>
                            <li><a class="dropdown-item" href="{{route('webdesignanddevelopment')}}">Web Desighn & Development</a></li>

                            <li class="nav-item dropdown">
                                <a href="" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Digital Marketing</a>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a class="dropdown-item" href="{{route('socialmediamarketing')}}">Social Media Marketing</a></li>
                                    <li><a class="dropdown-item" href="{{route('contentmarketing')}}">Content Marketing</a></li>
                                    <li><a class="dropdown-item" href="{{route('emailmarketing')}}">Email Marketing</a></li>
                                    <li><a class="dropdown-item" href="{{route('videomarketing')}}">Video Marketing</a></li>
                                    <li><a class="dropdown-item" href="{{route('influencermarketing')}}">Influencer Marketing</a></li>
                                    <li><a class="dropdown-item" href="{{route('seo')}}">SEO</a></li>
                                    <li><a class="dropdown-item" href="{{route('analyticsandtracking')}}">Analytics & Tracking</a></li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item" href="{{route('socialmedia')}}">Social Media Setup & Monitoring</a></li>
                            <li><a class="dropdown-item" href="{{route('businessconsultancy')}}">Business Consultancy</a></li>
                            <li><a class="dropdown-item" href="{{route('videomaking')}}">Video making</a></li>
                            <li><a class="dropdown-item" href="{{route('softwaredevelopment')}}">Software Development</a></li>
                            <li><a class="dropdown-item" href="{{route('appdesign')}}">App Design & Development</a></li>
                          </ul>
                      </li>
 
                    <li>
                        <a class="smooth-menu @if(\Request::segment(1)== "portfolio") active @endif" href="{{route('portfolio')}}">Portfolio</a>
                    </li>


                    <li>
                        <a class="smooth-menu @if(\Request::segment(1)== "Partner") active @endif" href="{{route('partner')}}">Partner</a>  
                    </li>

                     <li>
                        <a class="smooth-menu @if(\Request::segment(1)== "career") active @endif" href="{{route('career')}}">career</a>  
                    </li>

                    <li>
                        <a class="smooth-menu" href="{{route('blogs')}}">Blog</a>
                    </li>

                    <li>
                        <a class="smooth-menu @if(\Request::segment(1)== "about") active @endif" href="{{route('about')}}">About</a>
                    </li>

                    <li>
                        <a class="smooth-menu @if(\Request::segment(1)== "contact") active @endif" href="{{route('contact')}}">Contact</a>
                    </li>

                

                
</ul>
</li>
               
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>

    </nav>
    <!-- End Navigation -->

</header>
