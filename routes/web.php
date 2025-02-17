<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/product', [MainController::class, 'product'])->name('product');
Route::get('/about-us', [MainController::class, 'about_us'])->name('about');
Route::get('/contact-us', [MainController::class, 'contact_us'])->name('contact');


// Route::get('about-us', function () {
//     return route('contact');
// })->name('about');

// Route::get('contact-us', function () {
//     return "This is the contact us page";
// });
