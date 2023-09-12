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
                        <h2>Properties</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Properties</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Breadcrumb -->

    <!-- Page Conttent -->
    <main class="page-content section">

        <!-- Featured Properites Start -->
        <div class="properites-sidebar-wrap pt-100 pt-md-80 pt-sm-60 pb-100 pb-md-80 pb-sm-60">
            <div class="container">

                <ul class="properties-list nav justify-content-end">
                    <li class="active"><a class="active" href="#all" data-bs-toggle="tab">ALL</a></li>
                    <li><a href="#buy" data-bs-toggle="tab">FOR BUY</a></li>
                    <li><a href="#sale" data-bs-toggle="tab">FOR SALE</a></li>
                    <li><a href="#rent" data-bs-toggle="tab">FOR RENT</a></li>
                </ul>

                <div class="row flex-row-reverse">
                    <div class="col-lg-8 col-xl-9">

                        <div class="tab-content">
                            <div class="tab-pane active" id="all">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                        <!-- single-property Start -->
                                        <div class="single-property mt-30">
                                            <div class="property-img">
                                                <a href="properties-details.html">
                                                    <img src="assets/images/propertes/01.jpg" alt="">
                                                </a>
                                                <span class="level-stryker">FOR RENT</span>
                                            </div>
                                            <div class="property-desc">
                                                <h4><a href="properties-details.html">Mariyasa de Casel </a></h4>
                                                <p>
                                                    <span class="location">22 First street, Chicago, USA</span>
                                                    <span class="property-info">1200 Sqft, 3 Bed, 2 Bath, 1 Garage </span>
                                                </p>
                                                <div class="price-box">
                                                    <p>Price $ 1,59,000</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-property End -->
                                    </div>

                                    <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                        <!-- single-property Start -->
                                        <div class="single-property mt-30">
                                            <div class="property-img">
                                                <a href="properties-details.html">
                                                    <img src="assets/images/propertes/02.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="property-desc">
                                                <h4><a href="properties-details.html">Rose de Alfanez</a></h4>
                                                <p>
                                                    <span class="location">132 Future Street, Boston, USA</span>
                                                    <span class="property-info">1600 Sqft, 4 Bed, 2 Bath, 2 Garage </span>
                                                </p>
                                                <div class="price-box">
                                                    <p>Price $ 1,59,000</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-property End -->
                                    </div>

                                    <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                        <!-- single-property Start -->
                                        <div class="single-property mt-30">
                                            <div class="property-img">
                                                <a href="properties-details.html">
                                                    <img src="assets/images/propertes/03.jpg" alt="">
                                                </a>
                                                <span class="level-stryker-2">FOR RENT</span>
                                            </div>
                                            <div class="property-desc">
                                                <h4><a href="properties-details.html">La Casanda Villa</a></h4>
                                                <p>
                                                    <span class="location">1 DE Silicon Tower, Denver</span>
                                                    <span class="property-info">1800 Sqft, 6 Bed, 4 Bath, 3 Garage </span>
                                                </p>
                                                <div class="price-box">
                                                    <p>Price $2,32,000</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-property End -->
                                    </div>

                                    <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                        <!-- single-property Start -->
                                        <div class="single-property mt-30">
                                            <div class="property-img">
                                                <a href="properties-details.html">
                                                    <img src="assets/images/propertes/04.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="property-desc">
                                                <h4><a href="properties-details.html">Rainforest de Olive</a></h4>
                                                <p>
                                                    <span class="location">22 First street, Chicago, USA</span>
                                                    <span class="property-info">1200 Sqft, 3 Bed, 2 Bath, 1 Garage </span>
                                                </p>
                                                <div class="price-box">
                                                    <p>Rent $32,00/m</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-property End -->
                                    </div>

                                    <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                        <!-- single-property Start -->
                                        <div class="single-property mt-30">
                                            <div class="property-img">
                                                <a href="properties-details.html">
                                                    <img src="assets/images/propertes/05.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="property-desc">
                                                <h4><a href="properties-details.html">Tulip Duplex Villa</a></h4>
                                                <p>
                                                    <span class="location">Simplex Tower, Washington, USA</span>
                                                    <span class="property-info">980 Sqft, 3 Bed, 2 Bath, 1 Garage </span>
                                                </p>
                                                <div class="price-box">
                                                    <p>Price $ 1,59,000</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-property End -->
                                    </div>

                                    <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                        <!-- single-property Start -->
                                        <div class="single-property mt-30">
                                            <div class="property-img">
                                                <a href="properties-details.html">
                                                    <img src="assets/images/propertes/06.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="property-desc">
                                                <h4><a href="properties-details.html">Royal Casel Alpha</a></h4>
                                                <p>
                                                    <span class="location">2 FB New York main city, USA</span>
                                                    <span class="property-info">890 Sqft, 2 Bed, 2 Bath, 2Garage </span>
                                                </p>
                                                <div class="price-box">
                                                    <p>Rent $28,00/m</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-property End -->
                                    </div>

                                    <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                        <!-- single-property Start -->
                                        <div class="single-property mt-30">
                                            <div class="property-img">
                                                <a href="properties-details.html">
                                                    <img src="assets/images/propertes/07.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="property-desc">
                                                <h4><a href="properties-details.html">Casel de Paradise</a></h4>
                                                <p>
                                                    <span class="location">22 First street,Phoenix, USA</span>
                                                    <span class="property-info">1850 Sqft, 7 Bed, 4 Bath, 3 Garage </span>
                                                </p>
                                                <div class="price-box">
                                                    <p>Price $2,89,000</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-property End -->
                                    </div>

                                    <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                        <!-- single-property Start -->
                                        <div class="single-property mt-30">
                                            <div class="property-img">
                                                <a href="properties-details.html">
                                                    <img src="assets/images/propertes/08.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="property-desc">
                                                <h4><a href="properties-details.html">White Smith Casel</a></h4>
                                                <p>
                                                    <span class="location">22 First street, Chicago, USA</span>
                                                    <span class="property-info">950 Sqft, 2 Bed, 2 Bath, 1 Garage </span>
                                                </p>
                                                <div class="price-box">
                                                    <p>Price $1,53,000</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-property End -->
                                    </div>

                                    <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                        <!-- single-property Start -->
                                        <div class="single-property mt-30">
                                            <div class="property-img">
                                                <a href="properties-details.html">
                                                    <img src="assets/images/propertes/09.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="property-desc">
                                                <h4><a href="properties-details.html">Rose de Castel</a></h4>
                                                <p>
                                                    <span class="location">2 FB New York main city, USA</span>
                                                    <span class="property-info">890 Sqft, 2 Bed, 2 Bath, 2Garage </span>
                                                </p>
                                                <div class="price-box">
                                                    <p>Rent $26,00/m</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-property End -->
                                    </div>

                                    <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                        <!-- single-property Start -->
                                        <div class="single-property mt-30">
                                            <div class="property-img">
                                                <a href="properties-details.html">
                                                    <img src="assets/images/propertes/10.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="property-desc">
                                                <h4><a href="properties-details.html">Invision Duplex Villa</a></h4>
                                                <p>
                                                    <span class="location">22 First street,Phoenix, USA</span>
                                                    <span class="property-info">1850 Sqft, 7 Bed, 4 Bath, 3 Garage </span>
                                                </p>
                                                <div class="price-box">
                                                    <p>Price $2,89,000</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-property End -->
                                    </div>

                                    <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                        <!-- single-property Start -->
                                        <div class="single-property mt-30">
                                            <div class="property-img">
                                                <a href="properties-details.html">
                                                    <img src="assets/images/propertes/11.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="property-desc">
                                                <h4><a href="properties-details.html">Momen’s Palace</a></h4>
                                                <p>
                                                    <span class="location">22 First street, Chicago, USA</span>
                                                    <span class="property-info">950 Sqft, 2 Bed, 2 Bath, 1 Garage </span>
                                                </p>
                                                <div class="price-box">
                                                    <p>Price $1,93,000</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-property End -->
                                    </div>

                                    <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                        <!-- single-property Start -->
                                        <div class="single-property mt-30">
                                            <div class="property-img">
                                                <a href="properties-details.html">
                                                    <img src="assets/images/propertes/12.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="property-desc">
                                                <h4><a href="properties-details.html">White Smith Casel</a></h4>
                                                <p>
                                                    <span class="location">22 First street, Chicago, USA</span>
                                                    <span class="property-info">950 Sqft, 2 Bed, 2 Bath, 1 Garage </span>
                                                </p>
                                                <div class="price-box">
                                                    <p>Price $1,93,000</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-property End -->
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane" id="buy">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                        <!-- single-property Start -->
                                        <div class="single-property mt-30">
                                            <div class="property-img">
                                                <a href="properties-details.html">
                                                    <img src="assets/images/propertes/08.jpg" alt="">
                                                </a>
                                                <span class="level-stryker">FOR RENT</span>
                                            </div>
                                            <div class="property-desc">
                                                <h4><a href="properties-details.html">Mariyasa de Casel </a></h4>
                                                <p>
                                                    <span class="location">22 First street, Chicago, USA</span>
                                                    <span class="property-info">1200 Sqft, 3 Bed, 2 Bath, 1 Garage </span>
                                                </p>
                                                <div class="price-box">
                                                    <p>Price $ 1,59,000</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-property End -->
                                    </div>

                                    <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                        <!-- single-property Start -->
                                        <div class="single-property mt-30">
                                            <div class="property-img">
                                                <a href="properties-details.html">
                                                    <img src="assets/images/propertes/08.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="property-desc">
                                                <h4><a href="properties-details.html">Rose de Alfanez</a></h4>
                                                <p>
                                                    <span class="location">132 Future Street, Boston, USA</span>
                                                    <span class="property-info">1600 Sqft, 4 Bed, 2 Bath, 2 Garage </span>
                                                </p>
                                                <div class="price-box">
                                                    <p>Price $ 1,59,000</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-property End -->
                                    </div>

                                    <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                        <!-- single-property Start -->
                                        <div class="single-property mt-30">
                                            <div class="property-img">
                                                <a href="properties-details.html">
                                                    <img src="assets/images/propertes/07.jpg" alt="">
                                                </a>
                                                <span class="level-stryker-2">FOR RENT</span>
                                            </div>
                                            <div class="property-desc">
                                                <h4><a href="properties-details.html">La Casanda Villa</a></h4>
                                                <p>
                                                    <span class="location">1 DE Silicon Tower, Denver</span>
                                                    <span class="property-info">1800 Sqft, 6 Bed, 4 Bath, 3 Garage </span>
                                                </p>
                                                <div class="price-box">
                                                    <p>Price $2,32,000</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-property End -->
                                    </div>

                                    <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                        <!-- single-property Start -->
                                        <div class="single-property mt-30">
                                            <div class="property-img">
                                                <a href="properties-details.html">
                                                    <img src="assets/images/propertes/01.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="property-desc">
                                                <h4><a href="properties-details.html">Rainforest de Olive</a></h4>
                                                <p>
                                                    <span class="location">22 First street, Chicago, USA</span>
                                                    <span class="property-info">1200 Sqft, 3 Bed, 2 Bath, 1 Garage </span>
                                                </p>
                                                <div class="price-box">
                                                    <p>Rent $32,00/m</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-property End -->
                                    </div>

                                    <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                        <!-- single-property Start -->
                                        <div class="single-property mt-30">
                                            <div class="property-img">
                                                <a href="properties-details.html">
                                                    <img src="assets/images/propertes/02.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="property-desc">
                                                <h4><a href="properties-details.html">Tulip Duplex Villa</a></h4>
                                                <p>
                                                    <span class="location">Simplex Tower, Washington, USA</span>
                                                    <span class="property-info">980 Sqft, 3 Bed, 2 Bath, 1 Garage </span>
                                                </p>
                                                <div class="price-box">
                                                    <p>Price $ 1,59,000</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-property End -->
                                    </div>

                                    <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                        <!-- single-property Start -->
                                        <div class="single-property mt-30">
                                            <div class="property-img">
                                                <a href="properties-details.html">
                                                    <img src="assets/images/propertes/03.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="property-desc">
                                                <h4><a href="properties-details.html">Royal Casel Alpha</a></h4>
                                                <p>
                                                    <span class="location">2 FB New York main city, USA</span>
                                                    <span class="property-info">890 Sqft, 2 Bed, 2 Bath, 2Garage </span>
                                                </p>
                                                <div class="price-box">
                                                    <p>Rent $28,00/m</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-property End -->
                                    </div>

                                    <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                        <!-- single-property Start -->
                                        <div class="single-property mt-30">
                                            <div class="property-img">
                                                <a href="properties-details.html">
                                                    <img src="assets/images/propertes/04.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="property-desc">
                                                <h4><a href="properties-details.html">Casel de Paradise</a></h4>
                                                <p>
                                                    <span class="location">22 First street,Phoenix, USA</span>
                                                    <span class="property-info">1850 Sqft, 7 Bed, 4 Bath, 3 Garage </span>
                                                </p>
                                                <div class="price-box">
                                                    <p>Price $2,89,000</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-property End -->
                                    </div>

                                    <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                        <!-- single-property Start -->
                                        <div class="single-property mt-30">
                                            <div class="property-img">
                                                <a href="properties-details.html">
                                                    <img src="assets/images/propertes/05.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="property-desc">
                                                <h4><a href="properties-details.html">White Smith Casel</a></h4>
                                                <p>
                                                    <span class="location">22 First street, Chicago, USA</span>
                                                    <span class="property-info">950 Sqft, 2 Bed, 2 Bath, 1 Garage </span>
                                                </p>
                                                <div class="price-box">
                                                    <p>Price $1,53,000</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-property End -->
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane" id="sale">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                        <!-- single-property Start -->
                                        <div class="single-property mt-30">
                                            <div class="property-img">
                                                <a href="properties-details.html">
                                                    <img src="assets/images/propertes/02.jpg" alt="">
                                                </a>
                                                <span class="level-stryker">FOR RENT</span>
                                            </div>
                                            <div class="property-desc">
                                                <h4><a href="properties-details.html">Mariyasa de Casel </a></h4>
                                                <p>
                                                    <span class="location">22 First street, Chicago, USA</span>
                                                    <span class="property-info">1200 Sqft, 3 Bed, 2 Bath, 1 Garage </span>
                                                </p>
                                                <div class="price-box">
                                                    <p>Price $ 1,59,000</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-property End -->
                                    </div>

                                    <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                        <!-- single-property Start -->
                                        <div class="single-property mt-30">
                                            <div class="property-img">
                                                <a href="properties-details.html">
                                                    <img src="assets/images/propertes/04.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="property-desc">
                                                <h4><a href="properties-details.html">Rose de Alfanez</a></h4>
                                                <p>
                                                    <span class="location">132 Future Street, Boston, USA</span>
                                                    <span class="property-info">1600 Sqft, 4 Bed, 2 Bath, 2 Garage </span>
                                                </p>
                                                <div class="price-box">
                                                    <p>Price $ 1,59,000</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-property End -->
                                    </div>

                                    <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                        <!-- single-property Start -->
                                        <div class="single-property mt-30">
                                            <div class="property-img">
                                                <a href="properties-details.html">
                                                    <img src="assets/images/propertes/06.jpg" alt="">
                                                </a>
                                                <span class="level-stryker-2">FOR RENT</span>
                                            </div>
                                            <div class="property-desc">
                                                <h4><a href="properties-details.html">La Casanda Villa</a></h4>
                                                <p>
                                                    <span class="location">1 DE Silicon Tower, Denver</span>
                                                    <span class="property-info">1800 Sqft, 6 Bed, 4 Bath, 3 Garage </span>
                                                </p>
                                                <div class="price-box">
                                                    <p>Price $2,32,000</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-property End -->
                                    </div>

                                    <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                        <!-- single-property Start -->
                                        <div class="single-property mt-30">
                                            <div class="property-img">
                                                <a href="properties-details.html">
                                                    <img src="assets/images/propertes/08.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="property-desc">
                                                <h4><a href="properties-details.html">Rainforest de Olive</a></h4>
                                                <p>
                                                    <span class="location">22 First street, Chicago, USA</span>
                                                    <span class="property-info">1200 Sqft, 3 Bed, 2 Bath, 1 Garage </span>
                                                </p>
                                                <div class="price-box">
                                                    <p>Rent $32,00/m</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-property End -->
                                    </div>

                                    <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                        <!-- single-property Start -->
                                        <div class="single-property mt-30">
                                            <div class="property-img">
                                                <a href="properties-details.html">
                                                    <img src="assets/images/propertes/01.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="property-desc">
                                                <h4><a href="properties-details.html">Tulip Duplex Villa</a></h4>
                                                <p>
                                                    <span class="location">Simplex Tower, Washington, USA</span>
                                                    <span class="property-info">980 Sqft, 3 Bed, 2 Bath, 1 Garage </span>
                                                </p>
                                                <div class="price-box">
                                                    <p>Price $ 1,59,000</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-property End -->
                                    </div>

                                    <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                        <!-- single-property Start -->
                                        <div class="single-property mt-30">
                                            <div class="property-img">
                                                <a href="properties-details.html">
                                                    <img src="assets/images/propertes/03.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="property-desc">
                                                <h4><a href="properties-details.html">Royal Casel Alpha</a></h4>
                                                <p>
                                                    <span class="location">2 FB New York main city, USA</span>
                                                    <span class="property-info">890 Sqft, 2 Bed, 2 Bath, 2Garage </span>
                                                </p>
                                                <div class="price-box">
                                                    <p>Rent $28,00/m</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-property End -->
                                    </div>

                                    <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                        <!-- single-property Start -->
                                        <div class="single-property mt-30">
                                            <div class="property-img">
                                                <a href="properties-details.html">
                                                    <img src="assets/images/propertes/05.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="property-desc">
                                                <h4><a href="properties-details.html">Casel de Paradise</a></h4>
                                                <p>
                                                    <span class="location">22 First street,Phoenix, USA</span>
                                                    <span class="property-info">1850 Sqft, 7 Bed, 4 Bath, 3 Garage </span>
                                                </p>
                                                <div class="price-box">
                                                    <p>Price $2,89,000</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-property End -->
                                    </div>

                                    <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                        <!-- single-property Start -->
                                        <div class="single-property mt-30">
                                            <div class="property-img">
                                                <a href="properties-details.html">
                                                    <img src="assets/images/propertes/07.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="property-desc">
                                                <h4><a href="properties-details.html">White Smith Casel</a></h4>
                                                <p>
                                                    <span class="location">22 First street, Chicago, USA</span>
                                                    <span class="property-info">950 Sqft, 2 Bed, 2 Bath, 1 Garage </span>
                                                </p>
                                                <div class="price-box">
                                                    <p>Price $1,53,000</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-property End -->
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane" id="rent">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                        <!-- single-property Start -->
                                        <div class="single-property mt-30">
                                            <div class="property-img">
                                                <a href="properties-details.html">
                                                    <img src="assets/images/propertes/05.jpg" alt="">
                                                </a>
                                                <span class="level-stryker">FOR RENT</span>
                                            </div>
                                            <div class="property-desc">
                                                <h4><a href="properties-details.html">Mariyasa de Casel </a></h4>
                                                <p>
                                                    <span class="location">22 First street, Chicago, USA</span>
                                                    <span class="property-info">1200 Sqft, 3 Bed, 2 Bath, 1 Garage </span>
                                                </p>
                                                <div class="price-box">
                                                    <p>Price $ 1,59,000</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-property End -->
                                    </div>

                                    <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                        <!-- single-property Start -->
                                        <div class="single-property mt-30">
                                            <div class="property-img">
                                                <a href="properties-details.html">
                                                    <img src="assets/images/propertes/01.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="property-desc">
                                                <h4><a href="properties-details.html">Rose de Alfanez</a></h4>
                                                <p>
                                                    <span class="location">132 Future Street, Boston, USA</span>
                                                    <span class="property-info">1600 Sqft, 4 Bed, 2 Bath, 2 Garage </span>
                                                </p>
                                                <div class="price-box">
                                                    <p>Price $ 1,59,000</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-property End -->
                                    </div>

                                    <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                        <!-- single-property Start -->
                                        <div class="single-property mt-30">
                                            <div class="property-img">
                                                <a href="properties-details.html">
                                                    <img src="assets/images/propertes/06.jpg" alt="">
                                                </a>
                                                <span class="level-stryker-2">FOR RENT</span>
                                            </div>
                                            <div class="property-desc">
                                                <h4><a href="properties-details.html">La Casanda Villa</a></h4>
                                                <p>
                                                    <span class="location">1 DE Silicon Tower, Denver</span>
                                                    <span class="property-info">1800 Sqft, 6 Bed, 4 Bath, 3 Garage </span>
                                                </p>
                                                <div class="price-box">
                                                    <p>Price $2,32,000</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-property End -->
                                    </div>

                                    <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                        <!-- single-property Start -->
                                        <div class="single-property mt-30">
                                            <div class="property-img">
                                                <a href="properties-details.html">
                                                    <img src="assets/images/propertes/08.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="property-desc">
                                                <h4><a href="properties-details.html">Rainforest de Olive</a></h4>
                                                <p>
                                                    <span class="location">22 First street, Chicago, USA</span>
                                                    <span class="property-info">1200 Sqft, 3 Bed, 2 Bath, 1 Garage </span>
                                                </p>
                                                <div class="price-box">
                                                    <p>Rent $32,00/m</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-property End -->
                                    </div>

                                    <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                        <!-- single-property Start -->
                                        <div class="single-property mt-30">
                                            <div class="property-img">
                                                <a href="properties-details.html">
                                                    <img src="assets/images/propertes/07.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="property-desc">
                                                <h4><a href="properties-details.html">Tulip Duplex Villa</a></h4>
                                                <p>
                                                    <span class="location">Simplex Tower, Washington, USA</span>
                                                    <span class="property-info">980 Sqft, 3 Bed, 2 Bath, 1 Garage </span>
                                                </p>
                                                <div class="price-box">
                                                    <p>Price $ 1,59,000</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-property End -->
                                    </div>

                                    <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                        <!-- single-property Start -->
                                        <div class="single-property mt-30">
                                            <div class="property-img">
                                                <a href="properties-details.html">
                                                    <img src="assets/images/propertes/02.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="property-desc">
                                                <h4><a href="properties-details.html">Royal Casel Alpha</a></h4>
                                                <p>
                                                    <span class="location">2 FB New York main city, USA</span>
                                                    <span class="property-info">890 Sqft, 2 Bed, 2 Bath, 2Garage </span>
                                                </p>
                                                <div class="price-box">
                                                    <p>Rent $28,00/m</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-property End -->
                                    </div>

                                    <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                        <!-- single-property Start -->
                                        <div class="single-property mt-30">
                                            <div class="property-img">
                                                <a href="properties-details.html">
                                                    <img src="assets/images/propertes/03.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="property-desc">
                                                <h4><a href="properties-details.html">Casel de Paradise</a></h4>
                                                <p>
                                                    <span class="location">22 First street,Phoenix, USA</span>
                                                    <span class="property-info">1850 Sqft, 7 Bed, 4 Bath, 3 Garage </span>
                                                </p>
                                                <div class="price-box">
                                                    <p>Price $2,89,000</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-property End -->
                                    </div>

                                    <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                        <!-- single-property Start -->
                                        <div class="single-property mt-30">
                                            <div class="property-img">
                                                <a href="properties-details.html">
                                                    <img src="assets/images/propertes/01.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="property-desc">
                                                <h4><a href="properties-details.html">White Smith Casel</a></h4>
                                                <p>
                                                    <span class="location">22 First street, Chicago, USA</span>
                                                    <span class="property-info">950 Sqft, 2 Bed, 2 Bath, 1 Garage </span>
                                                </p>
                                                <div class="price-box">
                                                    <p>Price $1,53,000</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-property End -->
                                    </div>

                                </div>
                            </div>
                        </div>

                        <ul class="page-pagination mt-40">
                            <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                            <li class="active"><a href="#">01</a></li>
                            <li><a href="#">02</a></li>
                            <li><a href="#">03</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>

                    </div>
                    <div class="col-lg-4 col-xl-3">
                        <div class="widgets">
                            <div class="single-widget widget-search">
                                <h4 class="widget-title">
                                    <span>Find your home</span>
                                </h4>
                                <div class="search-wrap sidebar-wigets-search">
                                    <form action="#">
                                        <div class="row row-10">

                                            <div class="col-lg-6 col-md-4 col-sm-6 col-12 mt-20">
                                                <select class="nice-select">
                                                <option>For Rent</option>
                                                <option>For Sale</option>
                                            </select>
                                            </div>

                                            <div class="col-lg-6 col-md-4 col-sm-6 col-12 mt-20">
                                                <select class="nice-select">
                                                <option>Location </option>
                                                <option>Location 2</option>
                                                <option>Location 3</option>
                                                <option>Location 4</option>
                                            </select>
                                            </div>

                                            <div class="col-lg-6 col-md-4 col-sm-6 col-12 mt-20">
                                                <select class="nice-select">
                                                <option>All Types</option>
                                                <option>Types One</option>
                                                <option>Types Two</option>
                                                <option>Types Three</option>
                                            </select>
                                            </div>

                                            <div class="col-lg-6 col-md-4 col-sm-6 col-12 mt-20">
                                                <select class="nice-select">
                                                <option>Area(sqft)</option>
                                                <option>800(sqft)</option>
                                                <option>1200(sqft)</option>
                                                <option>1600(sqft)</option>
                                            </select>
                                            </div>

                                            <div class="col-lg-6 col-md-4 col-sm-6 col-12 mt-20">
                                                <select class="nice-select">
                                                <option>Bedroom</option>
                                                <option>0 Bedroom</option>
                                                <option>1 Bedroom</option>
                                                <option>2 Bedroom</option>
                                                <option>3 Bedroom</option>
                                                <option>4 Bedroom</option>
                                            </select>
                                            </div>

                                            <div class="col-lg-6 col-md-4 col-sm-6 col-12 mt-20">
                                                <select class="nice-select">
                                                <option>Bathroom</option>
                                                <option>0 Bathroom</option>
                                                <option>1 Bathroom</option>
                                                <option>2 Bathroom</option>
                                                <option>3 Bathroom</option>
                                                <option>4 Bathroom</option>
                                            </select>
                                            </div>

                                            <div class="col-lg-8 mt-20">
                                                <div id="price-range"></div>
                                            </div>

                                            <div class="col-lg-12 mt-20">
                                                <div class="serche-input-box  ml-auto mr-auto">
                                                    <input type="submit" value="search">
                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="single-widget widget">
                                <h4 class="widget-title">
                                    <span>New Added Property</span>
                                </h4>
                                <div class="single-propertiy-wigets">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-4">
                                            <div class="single-propertiy mt-30">
                                                <a href="#"><img src="assets/images/propertes/w-propertie-01.jpg" alt=""></a>
                                                <div class="propertiy-det-box">
                                                    <h4><a href="#">Casel la Denver</a></h4>
                                                    <p>Price $1,09,000</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-4">
                                            <div class="single-propertiy mt-30">
                                                <a href="#"><img src="assets/images/propertes/w-propertie-03.jpg" alt=""></a>
                                                <div class="propertiy-det-box">
                                                    <h4><a href="#">White Smith Casel</a></h4>
                                                    <p>Price $1,03,000</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-4">
                                            <div class="single-propertiy mt-30">
                                                <a href="#"><img src="assets/images/propertes/w-propertie-02.jpg" alt=""></a>
                                                <div class="propertiy-det-box">
                                                    <h4><a href="#">Casel la Denver</a></h4>
                                                    <p>Price $1,08,000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="single-widget widget">
                                <h4 class="widget-title">
                                    <span>Our Agent</span>
                                </h4>

                                <div class="row our-widget-agent mt-10">
                                    <div class="col-6">
                                        <div class="widget-agent">
                                            <div class="image">
                                                <a href="#"><img src="assets/images/agents/side-01.jpg" alt=""></a>
                                            </div>
                                            <div class="name">
                                                <h5>Bayazid Smith</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="widget-agent">
                                            <div class="image">
                                                <a href="#"> <img src="assets/images/agents/side-02.jpg" alt=""></a>
                                            </div>
                                            <div class="name">
                                                <h5>Bayazid Smith</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="widget-agent">
                                            <div class="image">
                                                <a href="#"><img src="assets/images/agents/side-03.jpg" alt=""></a>
                                            </div>
                                            <div class="name">
                                                <h5>Bayazid Smith</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="widget-agent">
                                            <div class="image">
                                                <a href="#"><img src="assets/images/agents/side-04.jpg" alt=""></a>
                                            </div>
                                            <div class="name">
                                                <h5>Bayazid Smith</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="single-widget widget-tag">
                                <h4 class="widget-title">
                                    <span>Tag</span>
                                </h4>
                                <ul class="tag mt-20">
                                    <li><a href="#">Real Estate</a></li>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Duplex</a></li>
                                    <li><a href="#">Villa</a></li>
                                    <li><a href="#">Appartment</a></li>
                                    <li><a href="#">Property</a></li>

                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Featured Properites End -->

    </main>
    <!--// Page Conttent -->

@endsection
