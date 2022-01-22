@extends('layouts.base')
@section('content')

        <!-- Top Slider-Banner Area Start -->

        <!-- Top Slider-Banner Area End -->
        <!-- Page Title Area start -->
        <section id="page-title-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-8"><h2 class="page-title">Our Services</h2></div>
                    <div class="col-md-4">
                        <ol class="breadcrumb uh-breadcrumb">
                          <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                          <li class="breadcrumb-item active">Services</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <!-- Page Title Area End -->
        <!-- Page content Start -->
        <div class="page-main-container"  id="services-page">
            <!-- page detail Start -->
            <section id="services-page-detail">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <h3>Services </h3>
                            <p>
We offer different oil field services through our partners companies <br>
@if ($general->services)
@php
    $x=1;
@endphp
@foreach ($general->services as $item)
@php echo $x; $x++; @endphp - {{$item}}<br>
@endforeach

@endif
</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- page detail End -->
            <!-- Service Experience Section Strart -->

            <!-- Service Experience Section End -->
            <!-- Our Services section start -->
            <section class="our-services">

        </section>


            <!-- Our Services section End -->
        </div>
        <!-- Page content End -->

@endsection
