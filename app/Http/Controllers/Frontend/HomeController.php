<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
{
    $features = [
        [
            'icon' => 'frontend/images/icons/feature-1.png',
            'title' => 'Minimum Cost',
            'description' => 'Provide low cost that helps all more build real estate',
        ],
        [
            'icon' => 'frontend/images/icons/feature-2.png',
            'title' => 'Best Marketing',
            'description' => 'Provide low cost that helps all more build real estate',
        ],
        // Add more features as needed
    ];

    $properties = [
        [
            'image' => 'frontend/images/propertes/01.jpg',
            'status' => 'FOR RENT',
            'title' => 'Mariyasa de Casel',
            'location' => '22 First street, Chicago, USA',
            'info' => '1200 Sqft, 3 Bed, 2 Bath, 1 Garage',
            'price' => 'Rent $1,59,000',
        ],
        [
            'image' => 'frontend/images/propertes/02.jpg',
            'status' => null, // No status for this property
            'title' => 'Rose de Alfanez',
            'location' => '132 Future Street, Boston, USA',
            'info' => '1600 Sqft, 4 Bed, 2 Bath, 2 Garage',
            'price' => '$1,59,000',
        ],
        [
            'image' => 'frontend/images/propertes/03.jpg',
            'status' => 'FOR RENT',
            'title' => 'La Casanda Villa',
            'location' => '1 DE Silicon Tower, Denver',
            'info' => '1800 Sqft, 6 Bed, 4 Bath, 3 Garage',
            'price' => 'Rent $2,32,000',
        ],
        [
            'image' => 'frontend/images/propertes/04.jpg',
            'status' => null, // No status for this property
            'title' => 'Rainforest de Olive',
            'location' => '22 First street, Chicago, USA',
            'info' => '1200 Sqft, 3 Bed, 2 Bath, 1 Garage',
            'price' => '$32,00/m',
        ],
        [
            'image' => 'frontend/images/propertes/05.jpg',
            'status' => 'FOR RENT',
            'title' => 'Mariyasa de Casel',
            'location' => '22 First street, Chicago, USA',
            'info' => '1200 Sqft, 3 Bed, 2 Bath, 1 Garage',
            'price' => 'Rent $1,59,000',
        ],
        [
            'image' => 'frontend/images/propertes/06.jpg',
            'status' => null, // No status for this property
            'title' => 'Rose de Alfanez',
            'location' => '132 Future Street, Boston, USA',
            'info' => '1600 Sqft, 4 Bed, 2 Bath, 2 Garage',
            'price' => '$1,59,000',
        ],
        [
            'image' => 'frontend/images/propertes/07.jpg',
            'status' => 'FOR RENT',
            'title' => 'La Casanda Villa',
            'location' => '1 DE Silicon Tower, Denver',
            'info' => '1800 Sqft, 6 Bed, 4 Bath, 3 Garage',
            'price' => 'Rent $2,32,000',
        ],
        [
            'image' => 'frontend/images/propertes/08.jpg',
            'status' => null, // No status for this property
            'title' => 'Rainforest de Olive',
            'location' => '22 First street, Chicago, USA',
            'info' => '1200 Sqft, 3 Bed, 2 Bath, 1 Garage',
            'price' => '$32,00/m',
        ],
        // Add more property data as needed
    ];

    $locationModules = [
        [
            'image' => 'frontend/images/banner/location-01.jpg',
            'name' => 'Home',
            'badge' => 'For Rent',
            'classes' => 'col-lg-5 col-md-5',
        ],
        [
            'image' => 'frontend/images/banner/location-02.jpg',
            'name' => 'Appartment',
            'badge' => 'For Sale',
            'classes' => 'col-lg-7 col-md-7',
        ],
        [
            'image' => 'frontend/images/banner/location-03.jpg',
            'name' => 'Office',
            'badge' => 'For Rent',
            'classes' => 'col-lg-7 col-md-7',
        ],
        [
            'image' => 'frontend/images/banner/location-04.jpg',
            'name' => 'Farm House',
            'badge' => 'For Sale',
            'classes' => 'col-lg-5 col-md-5',
        ],
        // Add more location modules as needed
    ];

    $sliders = [
        [
               'image' => 'frontend/images/about/about-1.jpg',
        ],
        [
               'image' => 'frontend/images/about/about-2.jpg',
        ],
    ];

    $smallimages = [
        [
            'image' => 'frontend/images/propertes/property-small-01.jpg',
            'class' => 'nav-link active',
            'feature' => '#featured-1',
        ],
        [
            'image' => 'frontend/images/propertes/property-small-02.jpg',
            'class' => 'nav-link',
            'feature' => '#featured-2',
        ],
        [
            'image' => 'frontend/images/propertes/property-small-03.jpg',
            'class' => 'nav-link',
            'feature' => '#featured-3',
        ],
    ];

    $villaimages = [
    [
        'id' => 'featured-1',
        'image' => 'frontend/images/propertes/property-lg-01.jpg',
        'call' => 'Call Us 01245 025 654',
        'class' => 'tab-pane active',
    ],
    [
        'id' => 'featured-2',
        'image' => 'frontend/images/propertes/property-lg-01.jpg',
        'call' => 'Call Us 01245 025 654',
        'class' => 'tab-pane',
    ],
    [
        'id' => 'featured-3',
        'image' => 'frontend/images/propertes/property-lg-01.jpg',
        'call' => 'Call Us 01245 025 654',
        'class' => 'tab-pane',
    ],

];

    $discountimages = [
        [
        'class' => 'image-1',
        'image' => 'frontend/images/propertes/choose-02.jpg',
        'price' => 'Price $1,53,000',
        ],
        [
        'class' => 'image-2',
        'image' => 'frontend/images/propertes/choose-01.jpg',
        'price' => 'Price $89,000',
        ],
    ];

    $discounticons = [
        [
            'image' => 'frontend/images/icons/feature-5.png',
            'heading' => 'Royel touch paint',
            'description' => 'Paint is the mirron of beautifull house build property with us',
        ],
        [
            'image' => 'frontend/images/icons/feature-6.png',
            'heading' => 'Fully Furnished',
            'description' => 'Well decorated and fully fuhed properties is available for all',
        ],
        [
            'image' => 'frontend/images/icons/feature-7.png',
            'heading' => 'Latest Interior design',
            'description' => 'All interior are latest and luxus mirron of beauty dream',
        ],
        [
            'image' => 'frontend/images/icons/feature-8.png',
            'heading' => 'Non stop security',
            'description' => 'Security in our property area is the main priority for our all',
        ],
    ];

    $agents = [
        [
            'image' => 'frontend/images/agents/agents-01.jpg',
            'name' => 'Jessica Thomson',
            'title' => 'Real Estate Agent',
            'social_links' => [
                'skype' => 'https://www.skype.com/en/',
                'facebook' => 'https://www.facebook.com/',
                'twitter' => 'https://twitter.com/',
                'linkedin' => 'https://www.linkedin.com',
            ],
        ],
        [
            'image' => 'frontend/images/agents/agents-06.jpg',
            'name' => 'Thomas Eilliams',
            'title' => 'Real Estate Agent',
            'social_links' => [
                'skype' => 'https://www.skype.com/en/',
                'facebook' => 'https://www.facebook.com/',
                'twitter' => 'https://twitter.com/',
                'linkedin' => 'https://www.linkedin.com',
            ],
        ],
        [
            'image' => 'frontend/images/agents/agents-03.jpg',
            'name' => 'Sayana Sarlin',
            'title' => 'Real Estate Agent',
            'social_links' => [
                'skype' => 'https://www.skype.com/en/',
                'facebook' => 'https://www.facebook.com/',
                'twitter' => 'https://twitter.com/',
                'linkedin' => 'https://www.linkedin.com',
            ],
        ],
        [
            'image' => 'frontend/images/agents/agents-04.jpg',
            'name' => 'Kuddus Boyati',
            'title' => 'Real Estate Agent',
            'social_links' => [
                'skype' => 'https://www.skype.com/en/',
                'facebook' => 'https://www.facebook.com/',
                'twitter' => 'https://twitter.com/',
                'linkedin' => 'https://www.linkedin.com',
            ],
        ],
        // Add more agents as needed
    ];

    $countdowns =
    [
        [
            'numbers' => '900',
            'heading' => 'Property Sale',
        ],
        [
            'numbers' => '125',
            'heading' => 'Employee',
        ],
        [
            'numbers' => '220',
            'heading' => 'Happy Clients',
        ],
        [
            'numbers' => '850',
            'heading' => 'Property Available',
        ],

    ];
    $latestBlogs = Blog::latest('published_at')
            ->take(3) // Adjust this to the number of latest blogs you want to display.
            ->get();


    return view('frontend.home', compact('features', 'properties', 'locationModules', 'sliders', 'smallimages', 'villaimages', 'discountimages', 'discounticons', 'agents', 'countdowns', 'latestBlogs'));
}
}
