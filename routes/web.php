<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/about-us', function () {
    return view('website.about-us');
});


Route::get('/shop', function () {
    return view('website.shop');
});

Route::get('/', function () {
    return view('website.index')->with('products',Product::all());
});

Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/cart', function () {
    return view('website.cart');
});


Route::get('/checkout', function () {
    return view('website.checkout');
});

Route::get('/contact-us', function () {
    return view('website.contact-us');
});

Route::get('/login', function () {
    return view('website.login');
});


Route::get('/register', function () {
    return view('website.register');
});

Route::resource('/products',ProductController::class);

Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();
