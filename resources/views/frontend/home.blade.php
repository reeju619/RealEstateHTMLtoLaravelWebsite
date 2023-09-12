
@extends('frontend.layouts.main')

@section('main-container')

    <!-- Hero Section Start -->
    <div class="hero-section section">

        <div class="hero-slider hero-slider-one">
            <div class="hero-slide-item" style="background-image: url({{url('frontend/images/hero/hero-5.jpg')}}"></div>
            <div class="hero-slide-item" style="background-image: url({{url('frontend/images/hero/hero-6.jpg')}}"></div>
        </div>

    </div>
    <!-- Hero Section End -->

    <!-- Search Section Start -->
    <div class="search-section section">
        <div class="container">

            <div class="search-wrap">
                <div class="row">
                    <div class="col text-center">
                        <h2>Find your home</h2>
                    </div>
                </div>
                <form action="#">
                    <div class="row">

                        <div class="col-lg-3 col-sm-6 mb-25">
                            <select class="nice-select">
                                <option>For Rent</option>
                                <option>For Sale</option>
                            </select>
                        </div>

                        <div class="col-lg-3 col-sm-6 mb-25">
                            <select class="nice-select">
                                <option>Location One</option>
                                <option>Location Two</option>
                                <option>Location Three</option>
                                <option>Location Four</option>
                            </select>
                        </div>

                        <div class="col-lg-3 col-sm-6 mb-25">
                            <select class="nice-select">
                                <option>All Types</option>
                                <option>Types One</option>
                                <option>Types Two</option>
                                <option>Types Three</option>
                            </select>
                        </div>

                        <div class="col-lg-3 col-sm-6 mb-25">
                            <select class="nice-select">
                                <option>Area(sqft)</option>
                                <option>800(sqft)</option>
                                <option>1200(sqft)</option>
                                <option>1600(sqft)</option>
                            </select>
                        </div>

                        <div class="col-lg-3 col-sm-6 mb-25">
                            <select class="nice-select">
                                <option>No. of Bedroom</option>
                                <option>1 Bedroom</option>
                                <option>2 Bedroom</option>
                                <option>3 Bedroom</option>
                                <option>4 Bedroom</option>
                            </select>
                        </div>

                        <div class="col-lg-3 col-sm-6 mb-25">
                            <select class="nice-select">
                                <option>No. of Bathroom</option>
                                <option>1 Bathroom</option>
                                <option>2 Bathroom</option>
                                <option>3 Bathroom</option>
                                <option>4 Bathroom</option>
                            </select>
                        </div>

                        <div class="col-lg-3 col-sm-6 mb-25">
                            <div id="price-range"></div>
                        </div>

                        <div class="col-lg-3 col-sm-6 mb-25">
                            <input type="submit" value="search">
                        </div>


                        <div class="col-lg-12">
                            <div class="add-link-wrap">
                                <a class="filter-active" href="#">+ Advanced Search</a>
                            </div>

                        </div>
                        <div class="col-lg-12 filter-wrapper">
                            <div class=" row">
                                <div class="col-lg-3 col-sm-6">
                                    <div class="single-check__box mt-15"><input type="checkbox"><a href="#">Property ID</a></div>
                                    <div class="single-check__box mt-15"><input type="checkbox"><a href="#">Garages</a></div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="single-check__box mt-15"><input type="checkbox"><a href="#">Air Conditioning</a></div>
                                    <div class="single-check__box mt-15"><input type="checkbox"><a href="#">Emergengy Exit</a></div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="single-check__box mt-15"><input type="checkbox"><a href="#">Swimming Pool</a></div>
                                    <div class="single-check__box mt-15"><input type="checkbox"><a href="#">Fire Alarm</a></div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="single-check__box mt-15"><input type="checkbox"><a href="#">Keywords</a></div>
                                    <div class="single-check__box mt-15"><input type="checkbox"><a href="#">GYM</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <!-- Search Section End -->

    <!-- About Section Start -->
    <div class="about-section section pt-100 pt-md-80 pt-sm-60">
        <div class="container">
            <div class="row gy-5 justify-content-between align-items-center">

                <div class="col-lg-4 offset-lg-1 col-md-5">
                    <div class="about-properties-area">
                        <div class="about-slider_bg"></div>
                        <div class="about-properties-slider">
                        @foreach ($sliders as $slider)
                            <div class="about-properties-item">
                                <div class="image"><img src=" {{ asset($slider['image']) }}" alt=""></div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-7">
                    <div class="about-content">
                        <h2>We never compromize <br> with quality work...</h2>
                        <p>Ortiz is one of the most popular real estate company all around USA. You can find your dream property or build property </p>

                        <div class="row gy-4 row-25">
                          @foreach ($features as $feature)
                          <div class="col-md-6 col-sm-6">
                              <div class="about-feature">
                                  <div class="icon"><img src="{{ asset($feature['icon']) }}" alt=""></div>
                                  <div class="content">
                                      <h4>{{ $feature['title'] }}</h4>
                                      <p>{{ $feature['description'] }}</p>
                                    </div>
                                 </div>
                            </div>
                             @endforeach
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- About Section End -->

    <!-- Location Module Section Start -->
    <div class="location-section section pt-70 pt-md-50 pt-sm-30">
        <div class="container">
        <div class="row">
    @foreach ( $locationModules as $module)
    <div class="{{ $module['classes'] }}">
        <a href="#" class="location-module mt-30">
            <img src="{{ asset($module['image']) }}" alt="">
            <div class="location-module__cont">
                <h3 class="location-module__name">{{ $module['name'] }}</h3>
                <span class="location-module__badge">{{ $module['badge'] }}</span>
            </div>
        </a>
    </div>
    @endforeach
</div>

        </div>
    </div>
    <!-- Location Module Section End -->

    <!-- Featured Properites Start -->
    <div class="featured-properites-section section pt-100 pt-md-80 pt-sm-60">
        <div class="container">

            <div class="tabs-categorys-list mb-30 mb-md-20 mb-sm-20">
                <ul class="nav" role="tablist">
                    <li class="active"><a class="active" href="#tab_item_01" role="tab" data-bs-toggle="tab">Property for Sale</a></li>
                    <li><a href="#tab_item_02" role="tab" data-bs-toggle="tab">Property for Rent</a></li>
                </ul>
            </div>

            <!-- tab-contnt start -->
            <div class="tab-content">
                <div class="tab-pane active" id="tab_item_01">

                    <div class="row">
                        @foreach ($properties as $property)
                        <div class="col-lg-3 col-sm-6">
                            <!-- single-property Start -->
                            <div class="single-property mt-30">
                                <div class="property-img">
                                    <a href="properties-details.html">
                                        <img src="{{ asset($property['image']) }}" alt="">
                                    </a>
                                    @if ($property['status'])
                                    <span class="level-stryker">{{ $property['status'] }}</span>
                                    @endif
                                </div>
                                <div class="property-desc">
                                         <h4><a href="properties-details.html">{{ $property['title'] }}</a></h4>
                                         <p>
                                             <span class="location">{{ $property['location'] }}</span>
                                             <span class="property-info">{{ $property['info'] }}</span>
                                         </p>
                                         <div class="price-box">
                                             <p>{{ $property['price'] }}</p>
                                         </div>
                                     </div>
                                 </div>
                                 <!-- single-property End -->
                             </div>
                             @endforeach
                         </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured Properites End -->

    <!-- Featured Property section start -->
    <div class="featured-section section pt-100 pt-md-80 pt-sm-60">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6">
                    <div class="featured-property h-100">
                        <div class="featured-property__details">
                            <h2 class="featured-property__title">Desilva De Villa</h2>
                            <address class="featured-property__address">24 North Street, California, USA</address>
                            <p class="featured-property__info">6500 sqft, 7 Bed, 5 Bath, 3 Garage</p>
                            <h3 class="featured-property__price">For Sale $54,000</h3>
                        </div>
                        <div class="featured-property__tab">
                            <ul class="nav nav-tabs justify-content-center">
                            @foreach ($smallimages as $smallimage)
                                <li class="nav-item">
                                    <a class="{{ $smallimage['class'] }}" data-bs-toggle="tab" href="{{ $smallimage['feature'] }}">
                                        <img src="{{ asset($smallimage['image']) }}" alt="Featured Tab">
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="feature-property__content h-100">
                        <div class="tab-content">
                        @foreach ($villaimages as $villaimage)
                            <div class="{{ $villaimage['class'] }}" id="{{ $villaimage['id'] }}">
                                <figure class="featured-property__image">
                                    <img src="{{ asset($villaimage['image']) }}" alt="Feature Tab">
                                    <figcaption class="featured-property__caption">{{ $villaimage['call'] }}
                                    </figcaption>
                                </figure>
                            </div>

                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured Property section end -->

    <!-- Choose Section Start -->
    <div class="choose-section section pt-100 pt-md-80 pt-sm-60">
        <div class="container">
            <div class="row gy-5 align-items-center">

                <div class="col-lg-5">
                    <div class="choose-properties">

                        <div class="choose-provide">

                            <span class="discount-stryker">35% Discount</span>

                            @foreach ($discountimages as $discountimage)

                            <div class="{{ $discountimage['class'] }}">
                                <img src="{{ asset($discountimage['image']) }}" alt="">
                                <div class="price-box">
                                    <p>{{ $discountimage['price'] }}</p>
                                </div>
                            </div>

                            @endforeach
                        </div>

                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="about-content">
                        <h2>We never compromize <br> with quality work...</h2>
                        <p>Ortiz is one of the most popular real estate company all around USA. You can find your dream property or build property </p>

                        <div class="row row-25">
                          @foreach ($discounticons as $discounticon)
                            <div class="col-sm-6">
                                <div class="about-feature mb-35">
                                    <div class="icon"><img src="{{ asset($discounticon['image']) }}" alt=""></div>
                                    <div class="content-two">
                                        <h4>{{ $discounticon['heading'] }}</h4>
                                        <p>{{ $discounticon['description'] }} </p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
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
            @foreach ($agents as $agent)
    <div class="col-lg-3 col-sm-6">
        <!-- Our Agents Start -->
        <div class="our-agents mt-30">
            <div class="agents-image">
                <img src="{{ asset($agent['image']) }}" alt="">

                <div class="agents-info">
                    <h3>View Details</h3>
                    <div class="agents-social">
                        <ul>
                            <li><a href="{{ $agent['social_links']['skype'] }}"><i class="fa fa-skype"></i></a></li>
                            <li><a href="{{ $agent['social_links']['facebook'] }}"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="{{ $agent['social_links']['twitter'] }}"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="{{ $agent['social_links']['linkedin'] }}"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="agents-contents">
                <h4>{{ $agent['name'] }}</h4>
                <p>{{ $agent['title'] }}</p>
            </div>
        </div>
        <!-- Our Agents End -->
    </div>
    @endforeach



            </div>

        </div>
    </div>
    <!-- Our Agents Section End -->

    <!-- About Section Start -->
    <div class="about-section section counter-bg pt-75 pt-md-55 pt-sm-35 pb-100 pb-md-80 pb-sm-60">
        <div class="container">

            <!-- Project Count Area Start -->
            <div class="row project-count">
            @foreach ($countdowns as $countdown)
                <div class="col-lg-3 col-sm-6 col-6">
                    <!-- counter start -->
                    <div class="counter text-center mt-25">
                        <h3 class="counter-active">{{ $countdown['numbers'] }}</h3>
                        <p>{{ $countdown['heading'] }}</p>
                    </div>
                    <!-- counter end -->
                </div>
                @endforeach

            </div>
            <!-- Project Count Area End -->

        </div>
    </div>
    <!-- About Section End -->

    <!-- Latest Blog Section Start -->
    <div class="latest-blog-section section pt-100 pt-md-80 pt-sm-60 pb-100 pb-md-80 pb-sm-60">
        <div class="container">

            <div class="section-title text-center mb-30 mb-md-20 mb-sm-20">
                <h2>Latest Blog Post</h2>
                <p> one of the most popular real estate company all around USA. You <br> can find your dream property or build property with us</p>
            </div>

            <div class="row">
            @foreach ($latestBlogs as $blog)
                <div class="col-lg-4 col-md-6">
                    <!-- Single latest blog Start -->
                    <div class="single-latest-blog mt-30">
                        <div class="latest-blog-image">
                        <a href="{{ route('blog.show', $blog->id) }}"><img src="{{ asset($blog->image_path) }}" alt="{{ $blog->title }}"></a>
                        </div>
                        <div class="latest-blog-contents">
                            <h4><a href="{{ route('blog.show', $blog->id) }}">{{ $blog->title }}</a></h4>
                            <p><span>{{ $blog->published_at->format('M d, Y') }}</span> / <span>{{ $blog->published_at->format('h:i a') }}</span></p>
                            <p>{{ Str::limit($blog->content, 100) }}</p>
                            <a class="read-more" href="{{ route('blog.show', $blog->id) }}">Read More</a>
                        </div>
                    </div>
                    <!-- Single latest blog End -->
                </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Latest Blog Section End -->

    @endsection

