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



    <!--  search overlay -->
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
                        <h2>Features</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Features</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Breadcrumb -->

    <!-- Choose Section Start -->
    <div class="choose-section section pt-100 pt-md-80 pt-sm-60">
        <div class="container">
            <div class="row align-items-center">

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
