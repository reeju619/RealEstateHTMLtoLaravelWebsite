<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $latestBlogs = Blog::latest('published_at')
            ->take(3) // Adjust this to the number of latest blogs you want to display.
            ->get();

        return view('frontend.blog', compact('latestBlogs'));
    }

    public function insertExistingBlogPosts()
    {
        $blogPosts = [
            // Define an array of your existing blog posts
            [
                'title' => 'Duplex Appartment Latest Design',
                'content' => 'Real estate festival is one of the famous feval for explain to you how all this mistaolt deand praising pain wasnad I will give complete',
                'image_path' => 'frontend/images/blog/blog-s-01.jpg',
                'published_at' => '2023-04-29 10:00:00',
            ],
            [
                'title' => 'Real Estate Fesitval - 2018',
                'content' => 'Real estate festival is one of the famous feval for explain to you how all this mistaolt deand praising pain wasnad I will give complete',
                'image_path' => 'frontend/images/blog/blog-s-02.jpg',
                'published_at' => '2023-05-09 18:00:00',
            ],
            [
                'title' => 'Latest Architectural Real Estate',
                'content' => 'Real estate festival is one of the famous feval for explain to you how all this mistaolt deand praising pain wasnad I will give complete',
                'image_path' => 'frontend/images/blog/blog-s-03.jpg',
                'published_at' => '2023-07-19 20:00:00',
            ],
            [
                'title' => 'Duplex Appartment Latest Design',
                'content' => 'Real estate festival is one of the famous feval for explain to you how all this mistaolt deand praising pain wasnad I will give complete',
                'image_path' => 'frontend/images/blog/blog-s-04.jpg',
                'published_at' => '2023-07-29 01:00:00',
            ],
            [
                'title' => 'Duplex Appartment Latest Design',
                'content' => 'Real estate festival is one of the famous feval for explain to you how all this mistaolt deand praising pain wasnad I will give complete',
                'image_path' => 'frontend/images/blog/blog-s-05.jpg',
                'published_at' => '2023-08-09 09:00:00',
            ],
            [
                'title' => 'Duplex Appartment Latest Design',
                'content' => 'Real estate festival is one of the famous feval for explain to you how all this mistaolt deand praising pain wasnad I will give complete',
                'image_path' => 'frontend/images/blog/blog-s-06.jpg',
                'published_at' => '2023-08-12 15:00:00',
            ],
            // Add more blog posts here...
        ];

        foreach ($blogPosts as $post) {
            Blog::create($post); // Insert each blog post into the database
        }

        return 'Existing blog posts inserted successfully.';
    }
    public function getAllBlogPosts()
{
    $blogPosts = Blog::all(); // Retrieve all blog posts

    return view('blog.index', compact('blogPosts'));
}
}
