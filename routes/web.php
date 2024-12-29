<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

// Route::get('/products', function () {
//     return view('products', [
//         "title" => "Products"
//     ]);
// });

Route::get('/products', [ProductController::class, 'index']);
//halaman single post
Route::get('products/{product:slug}', [ProductController::class, 'show']);

Route::get('/about', function () {
    return view('about', [
        "title" => "About"
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        "title" => "Contact"
    ]);
});

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
