@extends('layouts.base')
@section('content')

<!-- START Top Slider-Banner Area -->
<div class="slider-banner">
    <div id="as" class="uh-home-slider owl-carousel owl-theme">
        @foreach ($sliders as $slider)
            <div class="item" name="{{$slider->image}}">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 justify-content-center">
                        <div class="slider-content">
                            <h2 style="color: aliceblue; text-shadow: 2px 2px 4px #000000;">{{$slider->title}}</h2>
                            <p style="color: aliceblue; text-shadow: 2px 2px 4px #000000;">{{$slider->description}}</p>
                            <a href="#" class="btn uh-btn-active">Contact Us</a>
                            <a href="#" class="btn uh-btn-border">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endforeach



    </div>
</div>
<!-- END Top Slider-Banner Area -->
<!-- START About Us Section -->
<section id="about-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h6 class="section-sub-title">About us</h6>
                <p class="about-description"> {{$general->aboutus}}</p>
                <a href="{{route('about')}}" class="read-more">Read more <span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></a>
            </div>
            <div class="col-lg-4 d-none d-xl-block d-lg-block">
                <figure>
                    <img class="float-right" src="assets/images/about1.jpg" alt="about us">
                </figure>
            </div>
        </div>
    </div>
</section>
<!-- END About Us Section -->
<!-- START Our Services section -->
<section class="our-services">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="section-title with-line text-right">What we do</h2>
                <h6 class="section-sub-title has-line text-right">Our Services</h6>
            </div>
        </div>
        <div class="row">
            @if ($general->services)
                @php
                    $x=1;
                @endphp
                @foreach ($general->services as $item)
                    <div class="col-lg-4 col-md-6">
                        <div class="text-box-icon wow fadeInUp">
                            <div class="icon-box"><i class="fa fa-cogs" aria-hidden="true"></i></div>
                            <div class="text-box">
                                <h4>{{$item}} </h4>
                            </div>
                        </div>
                    </div>
                    @php
                        $x++;
                        if($x==7)
                        {
                            break;
                        }
                    @endphp
                @endforeach
            @endif

        </div>
        <div class="row">
            <div class="col text-center wow fadeInUp">
                <a href="{{route('services')}}" class="btn uh-btn-active">View all Services</a>
            </div>
        </div>
    </div>
</section>
<!-- END Our Services section -->
<!-- START Latest Projects Section -->

<!-- Latest Projects Section ENDs -->
<!-- Client-Relation section START -->

<!-- Client-Relation section END -->
<!-- Our Blog Section START -->

<!-- Our Blog Section END -->
<!-- Promo Section START -->

<!-- Promo Section END -->
<!-- Testimonial Section START -->

<!-- END Testimonial Section -->
<!-- START Client Logo section -->
<!--
<div id="client-logo-section">
    <div class="container">
        <div class="row">
            <div class="col">
                <h6 class="section-sub-title">Our Partenr</h6>

            </div>
            <div class="col">
                <ul class="logo-carousel owl-carousel owl-theme">
                    <li><a href="#"><img src="assets/images/logos/logo-1.png" alt="Client Logo"></a></li>
                    <li><a href="#"><img src="assets/images/logos/logo-2.png" alt="Client Logo"></a></li>
                    <li><a href="#"><img src="assets/images/logos/logo-3.png" alt="Client Logo"></a></li>
                    <li><a href="#"><img src="assets/images/logos/logo-4.png" alt="Client Logo"></a></li>
                    <li><a href="#"><img src="assets/images/logos/logo-5.png" alt="Client Logo"></a></li>
                    <li><a href="#"><img src="assets/images/logos/logo-6.png" alt="Client Logo"></a></li>
                    <li><a href="#"><img src="assets/images/logos/logo-3.png" alt="Client Logo"></a></li>
                    <li><a href="#"><img src="assets/images/logos/logo-5.png" alt="Client Logo"></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
-->
<!-- END Client Logo section -->

@endsection
