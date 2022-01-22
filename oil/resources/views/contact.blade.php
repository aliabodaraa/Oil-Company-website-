@extends('layouts.base')
@section('content')
        <!-- Top Slider-Banner Area Start -->
        <div class="slider-banner">
            <img src="assets/images/page-banner/banner-contact1.jpg" alt="Contact Page banner">
        </div>
        <!-- Top Slider-Banner Area End -->
        <!-- Page Title Area start -->
        <section id="page-title-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-8"><h2 class="page-title">Contact Us</h2></div>
                    <div class="col-md-4">
                        <ol class="breadcrumb uh-breadcrumb">
                          <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                          <li class="breadcrumb-item active">Contact Us</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <!-- Page Title Area End -->
        <!-- Page content Start -->
        <div id="page-main-container">
            <section class="contact-us-form">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <h3>Get in Touch</h3>
                            <form id='contact-page-form'>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="comnt-frm-name" class="col-form-label">NAME *</label>
                                        <input type="text" class="form-control"  id="comnt-frm-name" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="comnt-frm-organisation" class="col-form-label">ORGANISATION</label>
                                        <input type="text" class="form-control" id="comnt-frm-organisation">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="comnt-frm-email" class="col-form-label">EMAIL *</label>
                                        <input type="email" class="form-control" id="comnt-frm-email" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="comnt-frm-phone" class="col-form-label">TELEPHONE</label>
                                        <input type="text" class="form-control"  id="comnt-frm-phone">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="comnt-frm-subject" class="col-form-label">SUBJECT *</label>
                                        <select class="form-control" id="comnt-frm-subject">
                                            <option selected>- Select -</option>
                                            <option>services</option>
                                            <option>supplise</option>
                                  
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="comnt-frm-comnt">MESSAGE / QUESTION *</label>
                                        <textarea class="form-control" id="comnt-frm-comnt" rows="4"  required></textarea>
                                    </div>
                                </div>
                                <div class="form-row align-items-center">
                                    <div class="form-group col-md-7 align-self-center">
                                        <p class="form-info">We will answer you within 24 hours.</p>
                                    </div>
                                    <div class="form-group col-md-5 text-right">
                                        <button type="submit" class="btn uh-btn-active" >Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-5 text-right d-none d-xl-block d-lg-block">
                            <div class="contact-info-block text-left">
                                <div class="info-icon-text">
                                    <div class="info-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                                    <div class="info-icon-info">
                                        <p>Turkey</p>
                                        <p>MERSİN GAZİ MAH.</p>
                                    </div>
                                </div>
                                <div class="info-icon-text">
                                    <div class="info-icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                                    <div class="info-icon-info">
                                        <p>+90 534 078 13 62</p>
                                    </div>
                                </div>
                                <div class="info-icon-text">
                                    <div class="info-icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
                                    <div class="info-icon-info">
                                        <p>Mon - Fri: 08.00 - 17.00</p>
                                    </div>
                                </div>
                                
                                <div class="info-icon-text">
                                    <div class="info-icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                                    <div class="info-icon-info">
                                        <p>support@oilfieldsupport.net</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
        </div>
        <!-- Page content End -->
    @endsection