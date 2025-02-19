<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index() {
    //     return view('index'); // Refers to resources/views/controller.blade.php
    // }
    public function product() {
        return view('others/product'); // Refers to resources/views/controller.blade.php
    }
    public function about_us() {
        return view('others/about-us'); // Refers to resources/views/controller.blade.php
    }
    public function contact_us() {
        return view('others/contact-us'); // Refers to resources/views/controller.blade.php
    }
    public function index() {
        $articles = Article::all();
        $categories = Category::all();
        
        // Return home view with data
        return view('pages/index', compact('articles', 'categories'));
        
    }
}

