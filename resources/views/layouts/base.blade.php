<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Oilfield Support</title>
        <meta name="description" content="UrbanHouse is a business HTML5 template for construction, building companies and those that offer building services. This template is the perfect solution for you because is a clean and modern template and contain 9 HTML files. All the files are easy to edit and well Documented.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Place favicon.ico in the root directory -->
        <link rel="shortcut icon" type="image/ico" href={{asset("assets/images/favicon.ico")}}/>
        <!-- Fonts css -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
        <!-- Bootstrap 4 Beta CSS -->
        <link rel="stylesheet" href={{asset("assets/css/bootstrap.min.css")}}>
        <!-- Animate CSS -->
        <link rel="stylesheet" href={{asset("assets/css/animate.css")}}>
        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href={{asset("assets/css/owl.carousel.min.css")}}>
        <!-- Owl Carousel Theme default CSS -->
        <link rel="stylesheet" href={{asset("assets/css/owl.theme.default.min.css")}}>
        <!-- Font Awesome 4.7.0 CSS -->
        <link rel="stylesheet" href={{asset("assets/css/font-awesome.min.css")}}>
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href={{asset("assets/css/magnific-popup.css")}}>
        <!-- Main CSS -->
        <link rel="stylesheet" href={{asset("assets/css/style.css")}}>
    </head>
    <body>
        <!-- START Header -->
        <header>
            <!-- START Header Top Contact Area -->
            <div class="header-top-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <ul class="header-info-left">
                                <li><span><i class="fa fa-map-marker" aria-hidden="true"></i> </span>{{$general->country}} / {{$general->city}}.</li>
                                <li><span><i class="fa fa-phone" aria-hidden="true"></i> </span>{{$general->number}}</li>
                                <li><span><i class="fa fa-clock-o" aria-hidden="true"></i> </span>{{$general->startworkdays}} - {{$general->endworkdays}}: {{$general->startworktimes}} - {{$general->endworktimes}}</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="header-info-right">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
<!--                                <li><a href="#"><i class="fa fa-calculator" aria-hidden="true"></i> Cost Calculator</a></li>-->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Header Top Contact Area -->
            <!-- START Header Menu Area -->
            <div class="header-menu-area">
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-urbanhouse">
                        <a href="{{route('index')}}"><img src={{$general->logo}} style="width: 160px;"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item @if(Request::is('/')) active  @endif">
                                    <a class="nav-link" href="{{route('index')}}">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item @if(Request::is('*about*')) active  @endif " >
                                    <a class="nav-link" href="{{route('about')}}" >About Us</a>
                                </li>
                                <li class="nav-item @if(Request::is('*services*')) active  @endif">
                                    <a class="nav-link" href="{{route('services')}}" >Our Services</a>
                                </li>
                                  <li class="nav-item @if(Request::is('*suppliers*')) active  @endif">
                                    <a class="nav-link" href=" {{route('suppliers')}}" >Our Supplies</a>
                                </li>
                                <li class="nav-item @if(Request::is('*contact*')) active  @endif">
                                    <a class="nav-link" href="{{route('contact')}}">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- END Header Menu Area -->
        </header>
        <!-- Header END -->
        



        @yield('content')


        <!-- START Footer Area  -->
        <footer>
            <div id="footer-widget-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="footer-widget widget_text">
                                <a href="{{route('index')}}"><img src={{asset("assets/images/logos/logo-footer.svg")}} style="width: 250px;"></a>
<!--                                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehENDerit.</p>-->
                            </div>
                            
                        </div>
                        <div class="col-lg-2 col-md-6">
                            <div class="footer-widget widget_custom_menu">
                                <h3 class="footer-widget-title">Social Media</h3>
                                <div class="footer-widget widget_social">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="footer-widget widget_custom_menu">
                                <h3 class="footer-widget-title">Main Pages</h3>
                                <ul>
                                    <li><a href="{{route('index')}}">Home</a></li>
                                    <li><a href="{{route('about')}}">About Us</a></li>
                                    <li><a href="{{route('services')}}">Our Services</a></li>
                                    <li><a href="{{route('contact')}}">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="footer-widget widget_text">
                                <h3 class="footer-widget-title">Get in Touch</h3>
                                <div class="footer-icon-text">
                                    <div class="footer-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                                    <div class="footer-icon-info">
                                        <p>{{$general->country}}  / {{$general->city}}  </p>
                                        {{-- <p>GAZİ MAH.</p> --}}
                                    </div>
                                </div>
                                <div class="footer-icon-text">
                                    <div class="footer-icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                                    <div class="footer-icon-info">
                                        <p>{{$general->number}} </p>
                                    </div>
                                </div>
                                <div class="footer-icon-text">
                                    <div class="footer-icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
                                    <div class="footer-icon-info">
                                        <p>{{$general->startworkdays}}  - {{$general->endworkdays}}: {{$general->startworktimes}} - {{$general->endworktimes}}</p>
                                    </div>
                                </div>
                                <div class="footer-single-link"><a href="#"><span><i class="fa fa-angle-right" aria-hidden="true"></i></span> Contact Us</a></div>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="footer-copyright-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <p>&copy; Copyright 2021 Oilfield Support, All Rights Reserved</p>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <nav>
                                <ul style="  justify-content: flex-end;">
                                    
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Terms of Service</a></li>
                               
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END Footer Area  -->
        <!-- jQuery 3.2.1 js -->
        <script src={{asset("assets/js/vendor/jquery-3.2.1.slim.min.js")}}></script>
        <!-- Bootstrap 4 Beta depENDency popper 1.11.0 js  -->
        <script src={{asset("assets/js/vendor/popper.min.js")}}></script>
        <!-- Bootstrap 4 Beta JS -->
        <script src={{asset("assets/js/vendor/bootstrap.min.js")}}></script>
        <!-- WoW v-1.3.0 JS -->
        <script src={{asset("assets/js/vendor/wow-1.3.0.min.js")}}></script>
        <!-- Owl Carousel JS -->
        <script src={{asset("assets/js/vendor/owl.carousel.min.js")}}></script>
        <!-- Waypoint Js -->
        <script src={{asset("assets/js/vendor/waypoint/noframework.waypoints.min.js")}}></script>
        <!-- CountUp Js -->
        <script src={{asset("assets/js/vendor/countUp.min.js")}}></script>
        <!-- Isotope js for filter content js -->
        <script src={{asset("assets/js/vendor/isotope.js")}}></script>
        <!-- Magnific Popup - v1.1.0 js -->
        <script src={{asset("assets/js/vendor/jquery.magnific-popup.min.js")}}></script>
        <!-- Image Loaded Packeg -->
        <script src={{asset("assets/js/vendor/imagesloaded.pkgd.js")}}></script>
        <!-- Template JS -->
        <script src={{asset("assets/js/main.js")}}></script>

        <script>
            //console.log($('.uh-home-slider').children());
            var x=1;
            // $('#as').children().each(function(){
            //     $(this).prop('id', 'slide-'+x);
              
            //     if(true)
            //     {
            //         $(this).css({
            //         "background-size": "cover",
            //         "background-position": "center",
            //         "background-image":url('/assets/images/slider-banner/slider-x.jpg')
            //         });
            //     }
            //     x++;
            // });

            //console.log($('.uh-home-slider').find('.reals'));
            $('.uh-home-slider').find('.item').each(function(){
                $(this).prop('id', 'slide-'+x);
               // console.log($(this).text(),x);
                if(true )
                {
                    //console.log($(this).attr('name'));
                    $(this).css({
                    "background-size": "cover",
                    "background-position": "center",
                    //"background-image":"url(/assets/images/slider-banner/slider-"+x+".jpg)"
                    "background-image":"url("+$(this).attr('name')+")"
                    });
                }
                x++;
            });
            var i;
            //var as=$('.uh-home-slider').find('.item');
            //console.log(as);
            //for(i=0;i<as.length;i++){
               // console.log(as[i].find('.item'));
                //as[i].style.backgroundSize="cover";
                //as[i].style.backgroundPosition="center";
                //as[i].style.backgroundImage=`url('/assets/images/slider-banner/slider-x.jpg')`;
                // ({
                //         "background-size": "cover",
                //         "background-position": "center",
                //         "background-image":`url('/assets/images/slider-banner/slider-x.jpg')`
                //         });
           // }



           // $('element').attr('id', 'value');

        </script>
    </body>
</html>