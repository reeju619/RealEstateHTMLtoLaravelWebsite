@extends('frontend.layouts.main')

@section('main-container')

<!-- Header Section Start -->
<header class="header-wrapper section">
        <div class="header-top bg-theme-two section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="header-top-info">
                            <p class="text-white">Call us - <a href="tel:21548987658">21548 987 658</a></p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="header-buttons">
                            <a class="header-btn btn" href="add-property.html">Add Property</a>
                            <a class="header-btn btn-border" href="register.html">Register</a>
                            <a class="header-btn" href="login.html">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-section section">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-2 col-6">
                        <div class="header-logo">
                            <a href="index.html"><img src="assets/images/logo.png" alt=""></a>
                        </div>
                    </div>

                    <div class="col-lg-10 col-6">
                        <div class="header-mid_right-bar">
                            <nav class="main-menu d-lg-block d-none">
                                <ul>
                                    <li class="has-dropdown"><a href="index.html">Home</a>
                                        <ul class="sub-menu">
                                            <li><a href="index.html">Home one</a></li>
                                            <li><a href="index-2.html">Home two</a></li>
                                            <li><a href="index-3.html">Home three</a></li>
                                            <li><a href="index-4.html">Home Four</a></li>
                                            <li><a href="index-5.html">Home Five</a></li>
                                            <li><a href="index-6.html">Home Six</a></li>
                                            <li><a href="index-7.html">Home Seven</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-dropdown"><a href="service.html">Services</a>
                                        <ul class="sub-menu">
                                            <li><a href="service.html">Services</a></li>
                                            <li><a href="single-service.html">Single Services</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="features.html">Features</a></li>
                                    <li class="has-dropdown"><a href="properties.html">Properties</a>
                                        <ul class="sub-menu">
                                            <li><a href="properties.html">Properties</a></li>
                                            <li><a href="properties-left-sidebar.html">Properties Left Sidebar</a></li>
                                            <li><a href="properties-right-sidebar.html">Properties Right Sidebar</a></li>
                                            <li><a href="properties-details.html">Properties Details</a></li>
                                            <li><a href="add-property.html">Add Propertie</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-dropdown"><a href="#">Pages</a>
                                        <ul class="sub-menu">
                                            <li class="has-dropdown menu-item-has-children"><a href="blog.html">Blog Page</a>
                                                <ul class="sub-menu">
                                                    <li><a href="blog.html">Blog Page</a></li>
                                                    <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                                    <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                                    <li><a href="blog-details.html">Blog Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="about-us.html">About Page</a></li>
                                            <li><a href="create-agency.html">Create agency</a></li>
                                            <li><a href="login.html">Login Page</a></li>
                                            <li><a href="register.html">Register Page</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-dropdown"><a href="agent.html">Agent</a>
                                        <ul class="sub-menu">
                                            <li><a href="agent.html">Agent</a></li>
                                            <li><a href="agent-details.html">Agent Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact-us.html">Contact</a></li>
                                </ul>
                            </nav>
                            <div id="search-overlay-trigger" class="search-icon">
                                <a href="javascript:void(0)"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Mobile Menu -->
                    <div class="mobile-menu order-12 d-block d-lg-none col"></div>

                </div>
            </div>
        </div>
        <!-- Header Section End -->
    </header>

    <!-- search overlay -->
    <div class="search-overlay" id="search-overlay">

        <div class="search-overlay__header">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6 ml-auto col-4">
                        <!-- search content -->
                        <div class="search-content text-right">
                            <span class="mobile-navigation-close-icon" id="search-close-trigger"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="search-overlay__inner">
            <div class="search-overlay__body">
                <div class="search-overlay__form">
                    <form action="#">
                        <input type="text" placeholder="Search">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End of search overlay -->

    <!-- Breadcrumb -->
    <div class="breadcrumb-area section" style="background-image: url(assets/images/bg/breadcrumb.jpg)">
        <div class="container">
            <div class="breadcrumb pt-75 pb-75 pt-sm-70 pb-sm-40">
                <div class="row">
                    <div class="col">
                        <h2>About us</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">About</li>
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
            <div class="row gy-5 justify-content-between align-items-center">

                <div class="col-lg-4 offset-lg-1 col-md-5">
                    <div class="about-properties-area">
                        <div class="about-slider_bg"></div>
                        <div class="about-properties-slider">
                            <div class="about-properties-item">
                                <div class="image"><img src="assets/images/about/about-1.jpg" alt=""></div>
                            </div>

                            <div class="about-properties-item">
                                <div class="image"><img src="assets/images/about/about-2.jpg" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-7">
                    <div class="about-content">
                        <h2>We never compromize <br> with quality work...</h2>
                        <p>Ortiz is one of the most popular real estate company all around USA. You can find your dream property or build property </p>

                        <div class="row gy-4 row-25">

                            <div class="col-md-6 col-sm-6">
                                <div class="about-feature">
                                    <div class="icon"><img src="assets/images/icons/feature-1.png" alt=""></div>
                                    <div class="content">
                                        <h4>Minimum Cost</h4>
                                        <p>Privide low cost that help all more build real estate</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="about-feature">
                                    <div class="icon"><img src="assets/images/icons/feature-2.png" alt=""></div>
                                    <div class="content">
                                        <h4>Best Marketing</h4>
                                        <p>Privide low cost that help all more build real estate</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="about-feature">
                                    <div class="icon"><img src="assets/images/icons/feature-3.png" alt=""></div>
                                    <div class="content">
                                        <h4>Easy to Search</h4>
                                        <p>You can find your property to simply and easy way</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="about-feature">
                                    <div class="icon"><img src="assets/images/icons/feature-4.png" alt=""></div>
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

            <div class="section-title text-center mb-25 mb-md-15 mb-sm-15">
                <h2>Services that we provide</h2>
                <p>Ortiz is one of the most popular real estate company all around USA. You can find your dream property or build property with us. We always provide importance to our customer</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="service-item mt-35">
                        <div class="icon"><img src="assets/images/icons/service-1.png" alt=""></div>
                        <div class="content fix">
                            <h3>Buy Property</h3>
                            <p>We buy various of properties as like various people who want to sale their properites with trust</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item mt-35">
                        <div class="icon"><img src="assets/images/icons/service-2.png" alt=""></div>
                        <div class="content fix">
                            <h3>Sale Property</h3>
                            <p>Number of property for sale various of properties as like various people who want to sale their properites</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item mt-35">
                        <div class="icon"><img src="assets/images/icons/service-3.png" alt=""></div>

                        <div class="content fix">
                            <h3>Rent Property</h3>
                            <p>If you need property for rent various of properties as like various people who want to sale their faith</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Service Section End -->

    <!-- Choose Section Start -->
    <div class="choose-section section pt-100 pt-md-80 pt-sm-60">
        <div class="container">
            <div class="row gy-5 align-items-center">

                <div class="col-lg-5">
                    <div class="choose-properties">

                        <div class="choose-provide">

                            <span class="discount-stryker">35% Discount</span>

                            <div class="image-1">
                                <img src="assets/images/propertes/choose-02.jpg" alt="">
                                <div class="price-box">
                                    <p>Price $1,53,000</p>
                                </div>
                            </div>
                            <div class="image-2">
                                <img src="assets/images/propertes/choose-01.jpg" alt="">
                                <div class="price-box">
                                    <p>Price $89,000</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="about-content">
                        <h2>We never compromize <br> with quality work...</h2>
                        <p>Ortiz is one of the most popular real estate company all around USA. You can find your dream property or build property </p>

                        <div class="row row-25">
                            <div class="col-sm-6">
                                <div class="about-feature mb-35">
                                    <div class="icon"><img src="assets/images/icons/feature-5.png" alt=""></div>
                                    <div class="content-two">
                                        <h4>Royel touch paint</h4>
                                        <p>Paint is the mirron of beautifull house build property with us </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="about-feature mb-35">
                                    <div class="icon"><img src="assets/images/icons/feature-6.png" alt=""></div>
                                    <div class="content-two">
                                        <h4>Fully Furnished</h4>
                                        <p>Well decorated and fully fuhed properties is available for all</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="about-feature mb-35">
                                    <div class="icon"><img src="assets/images/icons/feature-7.png" alt=""></div>
                                    <div class="content-two">
                                        <h4>Latest Interior design</h4>
                                        <p>All interior are latest and luxus mirron of beauty dream </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="about-feature mb-35">
                                    <div class="icon"><img src="assets/images/icons/feature-8.png" alt=""></div>
                                    <div class="content-two">
                                        <h4>Non stop security</h4>
                                        <p>Security in our property area is the main priority for our all</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Choose Section End -->

    <!-- Our Agents Section Start -->
    <div class="our-agents-section section pt-100 pt-md-80 pt-sm-60 pb-100 pb-md-80 pb-sm-60 ">
        <div class="container">

            <div class="section-title text-center mb-30 mb-md-20 mb-sm-20">
                <h2>Our Agents</h2>
                <p> one of the most popular real estate company all around USA. You
                    <br> can find your dream property or build property with us</p>
            </div>

            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <!-- Our Agents Start -->
                    <div class="our-agents mt-30">
                        <div class="agents-image">
                            <img src="assets/images/agents/agents-01.jpg" alt="">

                            <div class="agents-info">
                                <h3>View Details</h3>
                                <div class="agents-social">
                                    <ul>
                                        <li><a href="https://www.skype.com/en/"><i class="fa fa-skype"></i></a></li>
                                        <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="https://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <div class="agents-contents">
                            <h4>Jassica Thomson</h4>
                            <p>Real Estate Agent</p>
                        </div>
                    </div>
                    <!-- Our Agents End -->
                </div>

                <div class="col-lg-3 col-sm-6">
                    <!-- Our Agents Start -->
                    <div class="our-agents mt-30">
                        <div class="agents-image">
                            <img src="assets/images/agents/agents-06.jpg" alt="">

                            <div class="agents-info">
                                <h3>View Details</h3>
                                <div class="agents-social">
                                    <ul>
                                        <li><a href="https://www.skype.com/en/"><i class="fa fa-skype"></i></a></li>
                                        <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="https://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <div class="agents-contents">
                            <h4>Thomas Eilliams</h4>
                            <p>Real Estate Agent</p>
                        </div>
                    </div>
                    <!-- Our Agents End -->
                </div>

                <div class="col-lg-3 col-sm-6">
                    <!-- Our Agents Start -->
                    <div class="our-agents mt-30">
                        <div class="agents-image">
                            <img src="assets/images/agents/agents-03.jpg" alt="">

                            <div class="agents-info">
                                <h3>View Details</h3>
                                <div class="agents-social">
                                    <ul>
                                        <li><a href="https://www.skype.com/en/"><i class="fa fa-skype"></i></a></li>
                                        <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="https://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <div class="agents-contents">
                            <h4>Sayana Sarlin</h4>
                            <p>Real Estate Agent</p>
                        </div>
                    </div>
                    <!-- Our Agents End -->
                </div>

                <div class="col-lg-3 col-sm-6">
                    <!-- Our Agents Start -->
                    <div class="our-agents mt-30">
                        <div class="agents-image">
                            <img src="assets/images/agents/agents-04.jpg" alt="">

                            <div class="agents-info">
                                <h3>View Details</h3>
                                <div class="agents-social">
                                    <ul>
                                        <li><a href="https://www.skype.com/en/"><i class="fa fa-skype"></i></a></li>
                                        <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="https://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <div class="agents-contents">
                            <h4>Kuddus Boyati</h4>
                            <p>Real Estate Agent</p>
                        </div>
                    </div>
                    <!-- Our Agents End -->
                </div>

            </div>

        </div>
    </div>
    <!-- Our Agents Section End -->

    <!-- Testimonial Section Start -->
    <div class="testimonial-section section pt-100 pt-md-80 pt-sm-60">
        <div class="testimonial-bg" style="background-image: url(./assets/images/bg/testimonial.jpg);"></div>
        <div class="container">
            <div class="testimonial-slider">
                <div class="col px-3">
                    <div class="single-testimonial">
                        <div class="testimonial-author">
                            <div class="image">
                                <img src="assets/images/testimonial/outher-01.jpg" alt="">
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
                                <img src="assets/images/testimonial/outher-02.jpg" alt="">
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
                                <img src="assets/images/testimonial/outher-01.jpg" alt="">
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
                <div class="col">
                    <div class="single-brand">
                        <a href="#"><img src="assets/images/brand/01.png" alt=""></a>
                    </div>
                </div>
                <div class="col">
                    <div class="single-brand">
                        <a href="#"><img src="assets/images/brand/02.png" alt=""></a>
                    </div>
                </div>
                <div class="col">
                    <div class="single-brand">
                        <a href="#"><img src="assets/images/brand/03.png" alt=""></a>
                    </div>
                </div>
                <div class="col">
                    <div class="single-brand">
                        <a href="#"><img src="assets/images/brand/04.png" alt=""></a>
                    </div>
                </div>
                <div class="col">
                    <div class="single-brand">
                        <a href="#"><img src="assets/images/brand/05.png" alt=""></a>
                    </div>
                </div>
                <div class="col">
                    <div class="single-brand">
                        <a href="#"><img src="assets/images/brand/02.png" alt=""></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Brand Section End -->
    @endsection
