@extends('frontend.layouts.main')

@section('main-container')

    <!-- Breadcrumb -->
    <div class="breadcrumb-area section" style="background-image: url({{ url('frontend/images/bg/breadcrumb.jpg')}}">
        <div class="container">
            <div class="breadcrumb pt-75 pb-75 pt-sm-70 pb-sm-40">
                <div class="row">
                    <div class="col">
                        <h2>Blog</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Blog</li>
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

        <!-- Blog Grids Area -->
        <div class="blog-grids-area pt-100 pt-md-80 pt-sm-60 pb-100 pb-md-80 pb-sm-60">
            <div class="container">

                <div class="row flex-row-reverse">
                    <div class="col-lg-8">
                        <!-- blog-wrapper start -->
                        <div class="blog-wrapper">

                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <!-- Single latest blog Start -->
                                    <div class="single-latest-blog mt-30">
                                        <div class="latest-blog-image">
                                            <a href="blog-details.html"><img src="{{ url('frontend/images/blog/blog-s-01.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="latest-blog-contents">
                                            <h4><a href="blog-details.html">Duplex Appartment Latest Design</a></h4>
                                            <p><span>May 10, 2018</span> / <span>10 pm</span></p>
                                            <p>Real estate festival is one of the famous feval for explain to you how all this mistaolt deand praising pain wasnad I will give complete </p>
                                            <a class="read-more" href="blog-details.html">Read More</a>
                                        </div>
                                    </div>
                                    <!-- Single latest blog End -->
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <!-- Single latest blog Start -->
                                    <div class="single-latest-blog mt-30">
                                        <div class="latest-blog-image">
                                            <a href="blog-details.html"><img src="{{ url('frontend/images/blog/blog-s-02.jpg')}}"  alt=""></a>
                                        </div>
                                        <div class="latest-blog-contents">
                                            <h4><a href="blog-details.html">Real Estate Fesitval - 2018</a></h4>
                                            <p><span>May 08, 2018</span> / <span>03 pm</span></p>
                                            <p>Real estate festival is one of the famous feval for explain to you how all this mistaolt deand praising pain wasnad I will give complete </p>
                                            <a class="read-more" href="blog-details.html">Read More</a>
                                        </div>
                                    </div>
                                    <!-- Single latest blog End -->
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <!-- Single latest blog Start -->
                                    <div class="single-latest-blog mt-30">
                                        <div class="latest-blog-image">
                                            <a href="blog-details.html"><img src="{{ url('frontend/images/blog/blog-s-03.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="latest-blog-contents">
                                            <h4><a href="blog-details.html">Latest Architectural Real Estate</a></h4>
                                            <p><span>May 10, 2018</span> / <span>4 pm</span></p>
                                            <p>Real estate festival is one of the famous feval for explain to you how all this mistaolt deand praising pain wasnad I will give complete </p>
                                            <a class="read-more" href="blog-details.html">Read More</a>
                                        </div>
                                    </div>
                                    <!-- Single latest blog End -->
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <!-- Single latest blog Start -->
                                    <div class="single-latest-blog mt-30">
                                        <div class="latest-blog-image">
                                            <a href="blog-details.html"><img src="{{ url('frontend/images/blog/blog-s-04.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="latest-blog-contents">
                                            <h4><a href="blog-details.html">Architectural design Represent</a></h4>
                                            <p><span>May 10, 2018</span> / <span>17 pm</span></p>
                                            <p>Real estate festival is one of the famous feval for explain to you how all this mistaolt deand praising pain wasnad I will give complete </p>
                                            <a class="read-more" href="blog-details.html">Read More</a>
                                        </div>
                                    </div>
                                    <!-- Single latest blog End -->
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <!-- Single latest blog Start -->
                                    <div class="single-latest-blog mt-30">
                                        <div class="latest-blog-image">
                                            <a href="blog-details.html"><img src="{{ url('frontend/images/blog/blog-s-05.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="latest-blog-contents">
                                            <h4><a href="blog-details.html">All Latest Real Estate Project</a></h4>
                                            <p><span>May 08, 2018</span> / <span>03 pm</span></p>
                                            <p>Real estate festival is one of the famous feval for explain to you how all this mistaolt deand praising pain wasnad I will give complete </p>
                                            <a class="read-more" href="blog-details.html">Read More</a>
                                        </div>
                                    </div>
                                    <!-- Single latest blog End -->
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <!-- Single latest blog Start -->
                                    <div class="single-latest-blog mt-30">
                                        <div class="latest-blog-image">
                                            <a href="blog-details.html"><img src="{{ url('frontend/images/blog/blog-s-06.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="latest-blog-contents">
                                            <h4><a href="blog-details.html">How to Sell Property Easy Way</a></h4>
                                            <p><span>May 10, 2018</span> / <span>4 pm</span></p>
                                            <p>Real estate festival is one of the famous feval for explain to you how all this mistaolt deand praising pain wasnad I will give complete </p>
                                            <a class="read-more" href="blog-details.html">Read More</a>
                                        </div>
                                    </div>
                                    <!-- Single latest blog End -->
                                </div>
                            </div>

                        </div>

                        <!-- paginatoin-area Start -->
                        <ul class="page-pagination mt-40">
                            <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                            <li class="active"><a href="#">01</a></li>
                            <li><a href="#">02</a></li>
                            <li><a href="#">03</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                        <!--// paginatoin-area End -->

                    </div>

                    <div class="col-lg-4">
                        <div class="widgets left-sidebar">

                            <div class="single-widget widget-search">
                                <h4 class="widget-title">
                                    <span>Search here</span>
                                </h4>
                                <form action="#" class="widget-search-form mt-30">
                                    <input type="text" placeholder="Search...">
                                </form>
                            </div>

                            <div class="single-widget widget-categories">
                                <h4 class="widget-title">
                                    <span>Category</span>
                                </h4>
                                <ul class="widget-categories-list mt-30">
                                    <li><a href="#" class="categories-name">Appartment <span>75</span></a></li>
                                    <li><a href="#" class="categories-name">Appartment Building <span>40</span></a></li>
                                    <li><a href="#" class="categories-name">Duplex Villa <span>55</span> </a></li>
                                    <li><a href="#" class="categories-name">Corporate Building <span>56</span> </a></li>
                                    <li><a href="#" class="categories-name">Bangalow <span>18</span> </a></li>
                                    <li><a href="#" class="categories-name">Commercial Comples <span>12</span></a></li>
                                </ul>
                            </div>

                            <div class="single-widget widget-related">
                                <h4 class="widget-title">
                                    <span>Recent Post</span>
                                </h4>
                                <ul class="related-post mt-30">
                                    <li class="single-related">
                                        <div class="single-related-image">
                                            <a href="#"><img src="{{ url('frontend/images/blog/small/blog-side-01.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="single-related-contents">

                                            <h4><a href="single-blog.html">Latest Design Home</a></h4>
                                            <div class="post_meta">
                                                <ul>
                                                    <li>
                                                        <p> <a href="#">Ronchi </a> / 16 May, 2018</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <p>Lorem must explain to ten how all this mistakenea </p>
                                        </div>
                                    </li>
                                    <li class="single-related">
                                        <div class="single-related-image">
                                            <a href="#"><img src="{{ url('frontend/images/blog/small/blog-side-02.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="single-related-contents">
                                            <h4><a href="single-blog.html">Architectural Concept</a></h4>
                                            <div class="post_meta">
                                                <ul>
                                                    <li>
                                                        <p> <a href="#">Monu </a> / 10 May, 2018</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <p>Lorem must explain to ten how all this mistakenea </p>
                                        </div>
                                    </li>
                                    <li class="single-related">
                                        <div class="single-related-image">
                                            <a href="#"><img src="{{ url('frontend/images/blog/small/blog-side-01.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="single-related-contents">
                                            <h4><a href="single-blog.html">Real Estate Business</a></h4>
                                            <div class="post_meta">
                                                <ul>
                                                    <li>
                                                        <p> <a href="#">Jowel </a> / 17 May, 2018</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <p>Lorem must explain to ten how all this mistakenea </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="single-widget widget-newsletter">
                                <h4 class="widget-title">
                                    <span>Latest Tweet</span>
                                </h4>

                                <div class="tweet-cont-wrap mt-30">
                                    <ul>
                                        <li><a href="#"> @Design Concept</a> dolor sit amet, costetur acing elit, sed do eiusmod tempor corporis suscipit am, nisi ut aliquid ex ea commodi consequatur.
                                            <div class="tweet-meta">
                                                <span><a href="#">Ronchi</a>  / 3 hour ago</span>
                                            </div>
                                        </li>
                                        <li><a href="#"> @Design Concept</a> dolor sit amet, costetur acing elit, sed do eiusmod tempor corporis suscipit am, nisi ut aliquid ex ea commodi consequatur.
                                            <div class="tweet-meta">
                                                <span><a href="#">Jara</a>  / 3 hour ago</span>
                                            </div>
                                        </li>
                                        <li><a href="#"> @How to make mory with Real estate dolor</a> sit amet, costetur acing elit, sed do eiusmod rporis suscipit am, nisi ut aliquid ex ea commod
                                            <div class="tweet-meta">
                                                <span><a href="#">Sonika</a>  / 3 hour ago</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="single-widget widget-newsletter">
                                <h4 class="widget-title">
                                    <span>Tag</span>
                                </h4>
                                <ul class="tag mt-20">
                                    <li><a href="#">Real Estate</a></li>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Appartment</a></li>
                                    <li><a href="#">Duplex villa</a></li>
                                    <li><a href="#">Property</a></li>
                                    <li><a href="#">Sale</a></li>
                                    <li><a href="#">Broker</a></li>
                                    <li><a href="#">Agent</a></li>
                                    <li><a href="#">Agency</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Blog Grids Area -->

    </main>
    <!--// Page Conttent -->

    @endsection
