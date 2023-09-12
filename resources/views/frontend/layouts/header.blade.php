<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Orion - Real Estate Pvt. Ltd.</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{url('frontend/images/favicon.ico')}}">

    <!-- CSS
	============================================ -->

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{url('frontend/css/plugins.css')}}">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{url('frontend/css/style.css')}}">

</head>

<body>


    <!-- Header Section Start -->

    <header class="header-wrapper section">

        <div class="header-section section bg-theme-two">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-2 col-6">
                        <div class="header-logo">
                            <a href="{{ route('home') }}"><img src="{{url('frontend/images/logo-2.png')}}" alt=""></a>
                        </div>
                    </div>

                    <div class="col-lg-10 col-6">
                        <div class="header-mid_right-bar">
                            <nav class="main-menu text-white d-lg-block d-none">
                                <ul>
                                    <li class="has-dropdown"><a href="{{ route('home') }}">Home</a>
                                    </li>
                                    <li class="has-dropdown"><a href="{{ route('services') }}">Services</a>
                                    </li>
                                    <li><a href="features.html">Features</a></li>
                                    <li class="has-dropdown"><a href="properties-left-sidebar.html.html">Properties</a>
                                    </li>
                                    <li class="has-dropdown"><a href="{{ route('blog') }}">Blog</a>
                                     </li>
                                    <li><a href="{{ route('contact') }}">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <!-- Mobile Menu -->
                    <div class="mobile-menu white-m-bar order-12 d-block d-lg-none col"></div>

                </div>
            </div>
        </div>
        <!-- Header Section End -->
    </header>
