@extends('frontend.layouts.main')

@section('main-container')

    <!-- Breadcrumb -->
    <div class="breadcrumb-area section" style="background-image: url({{ url('frontend/images/bg/breadcrumb.jpg') }})">
        <div class="container">
            <div class="breadcrumb pt-75 pb-75 pt-sm-70 pb-sm-40">
                <div class="row">
                    <div class="col">
                        <h2>Service</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Service</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Breadcrumb -->

    <!-- About Section Start -->
    <div class="about-section section pt-100 pt-md-80 pt-sm-60">
        <div class="container">
            <div class="row gy-5 align-items-center">

                <div class="col-lg-6 col-md-5">
                    <div class="about-properties">
                        <img src="{{ url('frontend/images/about/service.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-7">
                    <div class="about-content">
                        <h2>We always try to provide best <br> services for our customers...</h2>
                        <p>Ortiz is one of the most popular real estate company all around USA. You can find your dream property or build property with us. We always provide importance to our customer.</p>

                        <div class="row gy-4 row-25">

                            <div class="col-md-6 col-sm-6">
                                <div class="about-feature">
                                    <div class="icon"><img src="{{ url('frontend/images/icons/feature-1.png')}}" alt=""></div>
                                    <div class="content">
                                        <h4>Minimum Cost</h4>
                                        <p>Privide low cost that help all more build real estate</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="about-feature">
                                    <div class="icon"><img src="{{ url('frontend/images/icons/feature-2.png')}}" alt=""></div>
                                    <div class="content">
                                        <h4>Best Marketing</h4>
                                        <p>Privide low cost that help all more build real estate</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="about-feature">
                                    <div class="icon"><img src="{{ url('frontend/images/icons/feature-3.png')}}" alt=""></div>
                                    <div class="content">
                                        <h4>Easy to Search</h4>
                                        <p>You can find your property to simply and easy way</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="about-feature">
                                    <div class="icon"><img src="{{ url('frontend/images/icons/feature-4.png')}}" alt=""></div>
                                    <div class="content">
                                        <h4>Secure</h4>
                                        <p>You can find your property to simply and easy way</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- About Section End -->

    <!-- Service Section Start -->
    <div class="service-section section pt-100 pt-md-80 pt-sm-60">
        <div class="container">

            <div class="section-title text-center  mb-60 mb-md-15 mb-sm-15">
                <h2>Services that we provide</h2>
                <p>Ortiz is one of the most popular real estate company all around USA. You can find your dream property or build property with us. We always provide importance to our customer</p>
            </div>

            <div class="row">

                <div class="col-lg-4 col-sm-6">
                    <div class="service-item mb-35">
                        <div class="icon"><img src="{{ url('frontend/images/icons/service-1.png')}}" alt=""></div>
                        <div class="content fix">
                            <h3>Buy Property</h3>
                            <p>We buy various of properties as like various people who want to sale their properites with trust</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item mb-35">
                        <div class="icon"><img src="{{ url('frontend/images/icons/service-2.png')}}" alt=""></div>
                        <div class="content fix">
                            <h3>Sale Property</h3>
                            <p>Number of property for sale various of properties as like various people who want to sale their properites</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item mb-35">
                        <div class="icon"><img src="{{ url('frontend/images/icons/service-3.png')}}" alt=""></div>
                        <div class="content fix">
                            <h3>Rent Property</h3>
                            <p>If you need property for rent various of properties as like various people who want to sale their faith</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item mb-35">
                        <div class="icon"><img src="{{ url('frontend/images/icons/service-4.png')}}" alt=""></div>

                        <div class="content fix">
                            <h3>Best Marketing</h3>
                            <p>We buy various of properties as like various people who want to sale their properites with trust</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item mb-35">
                        <div class="icon"><img src="{{ url('frontend/images/icons/service-5.png')}}" alt=""></div>
                        <div class="content fix">
                            <h3>Minimum Cost</h3>
                            <p>Number of property for sale various of properties as like various people who want to sale their properites</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item mb-35">
                        <div class="icon"><img src="{{ url('frontend/images/icons/service-6.png')}}" alt=""></div>
                        <div class="content fix">
                            <h3>Deal analysis</h3>
                            <p>If you need property for rent various of properties as like various people who want to sale their faith</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!-- Service Section End -->

    <!-- Testimonial Section Start -->
    <div class="testimonial-section section pt-100 pt-md-80 pt-sm-60">
        <div class="container">
            <div class="testimonial-slider">
                <div class="col px-3">
                    <div class="single-testimonial">
                        <div class="testimonial-author">
                            <div class="image">
                                <img src="{{ url('frontend/images/testimonial/outher-01.jpg')}}" alt="">
                            </div>
                            <div class="outhor-info">
                                <h4>Lora Momen Smith</h4>
                                <p>CEO, Momens Group</p>
                            </div>
                        </div>
                        <div class="testimonial-dec">
                            <p>one of the most popular real estate company all around USA. You can find your dream property or the build erty with us. We always provide importance</p>
                        </div>
                    </div>
                </div>
                <div class="col px-3">
                    <div class="single-testimonial">
                        <div class="testimonial-author">
                            <div class="image">
                                <img src="{{ url('frontend/images/testimonial/outher-02.jpg')}}" alt="">
                            </div>
                            <div class="outhor-info">
                                <h4>Zakuline Fernandez </h4>
                                <p>CEO, Momens Group</p>
                            </div>
                        </div>
                        <div class="testimonial-dec">
                            <p>one of the most popular real estate company all around USA. You can find your dream property or the build erty with us. We always provide importance</p>
                        </div>
                    </div>
                </div>
                <div class="col px-3">
                    <div class="single-testimonial">
                        <div class="testimonial-author">
                            <div class="image">
                                <img src="{{ url('frontend/images/testimonial/outher-01.jpg')}}" alt="">
                            </div>
                            <div class="outhor-info">
                                <h4>Lora Momen Smith</h4>
                                <p>CEO, Momens Group</p>
                            </div>
                        </div>
                        <div class="testimonial-dec">
                            <p>Ortiz is one of the most popular real estate company all around USA. You can find your dream property or the build erty with us. We always provide importance</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial Section End -->

    <!-- Brand Section Start -->
    <div class="brand-section section pt-100 pt-md-80 pt-sm-60 pb-100 pb-md-80 pb-sm-60">
        <div class="container">

            <div class="row brand-active">
                <div class="col px-3">
                    <div class="single-brand">
                        <a href="#"><img src="{{ url('frontend/images/brand/01.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="col px-3">
                    <div class="single-brand">
                        <a href="#"><img src="{{ url('frontend/images/brand/02.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="col px-3">
                    <div class="single-brand">
                        <a href="#"><img src="{{ url('frontend/images/brand/03.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="col px-3">
                    <div class="single-brand">
                        <a href="#"><img src="{{ url('frontend/images/brand/04.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="col px-3">
                    <div class="single-brand">
                        <a href="#"><img src="{{ url('frontend/images/brand/05.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="col px-3">
                    <div class="single-brand">
                        <a href="#"><img src="{{ url('frontend/images/brand/02.png')}}" alt=""></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Brand Section End -->
    @endsection
