<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/index', [HomeController::class, 'index'])->name('index');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/shop', [HomeController::class, 'shop'])->name('shop');
Route::get('/shop-details', [HomeController::class, 'shopDetails'])->name('shop.details');
Route::get('/cart-page', [HomeController::class, 'cart'])->name('cart');
Route::get('/checkout', [HomeController::class, 'checkout'])->name('checkout');
Route::get('/order-tracking', [HomeController::class, 'orderTracking'])->name('order.tracking');
Route::get('/faqs', [HomeController::class, 'faqs'])->name('faqs');
Route::get('/error', [HomeController::class, 'error'])->name('error');

