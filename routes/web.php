<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Auth::routes();
// Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/product', [MainController::class, 'product'])->name('product');
Route::get('/about-us', [MainController::class, 'about_us'])->name('about');
Route::get('/contact-us', [MainController::class, 'contact_us'])->name('contact');

Route::get('/article', [ArticleController::class, 'article'])->name('article');
Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');
Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store');
Route::get('/article/{article}/edit', [ArticleController::class, 'edit'])->name('article.edit');
Route::put('/article/{article}/update', [ArticleController::class, 'update'])->name('article.update');
Route::delete('/article/{article}/destroy', [ArticleController::class, 'destroy'])->name('article.destroy');

Route::get('/category', [CategoryController::class, 'category'])->name('category');
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
Route::get('/category/{category}/edit', [CategoryController::class, 'edit'])->name('category.edit');
Route::put('/category/{category}/update', [CategoryController::class, 'update'])->name('category.update');
Route::delete('/category/{category}/destroy', [CategoryController::class, 'destroy'])->name('category.destroy');

// Route::get('about-us', function () {
//     return route('contact');
// })->name('about');

// Route::get('contact-us', function () {
//     return "This is the contact us page";
// });

Auth::routes();

Route::get('/', [MainController::class, 'index'])->name('home');
