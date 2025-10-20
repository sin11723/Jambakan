<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\News;
use App\Models\Gallery;

class HomeController extends Controller
{
    public function index()
    {
        $featuredProducts = Product::where('is_featured', true)->take(2)->get();
        $allProducts = Product::take(5)->get();
        $news = News::whereNotNull('published_at')->orderBy('published_at', 'desc')->take(3)->get();
        $galleries = Gallery::take(4)->get();

        return view('home', compact('featuredProducts', 'allProducts', 'news', 'galleries'));
    }
}
