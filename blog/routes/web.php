<?php

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

Route::get('/', function () {
    return view('index');
});
Route::get('/all-products', function() {
    return view('all-products');
});
Route::get('/login', function() {
    return view('login');
});
Route::get('/checkout', function() {
    return view('checkout');
});
Route::get('/cart', function() {
    return view('cart');
});
Route::get('/about', function() {
    return view('about');
});
Route::get('/faq', function() {
    return view('faq');
});
Route::get('/signup', function() {
    return view('signup');
});
Route::get('/product-details', function() {
    return view('product-details');
});
Route::get('/contact', function() {
    return view('contact');
});
Route::get('/dashboard', function() {
    return view('dashboard');
});
