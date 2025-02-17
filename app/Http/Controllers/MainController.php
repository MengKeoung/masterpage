<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        return view('index'); // Refers to resources/views/controller.blade.php
    }
    public function product() {
        return view('others/product'); // Refers to resources/views/controller.blade.php
    }
    public function about_us() {
        return view('others/about-us'); // Refers to resources/views/controller.blade.php
    }
    public function contact_us() {
        return view('others/contact-us'); // Refers to resources/views/controller.blade.php
    }
}

