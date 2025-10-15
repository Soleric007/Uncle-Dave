<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\OrderTrackingController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FoodItemController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Auth\LoginController;

// ==============================
// Public Routes
// ==============================

// Home & Static Pages
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/index', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/faqs', [HomeController::class, 'faqs'])->name('faqs');
Route::get('/error', [HomeController::class, 'error'])->name('error');

// Shop
Route::get('/shop', [ShopController::class, 'index'])->name('shop');
Route::get('/shop/{id}', [ShopController::class, 'show'])->name('shop.details');

// Cart
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::post('/cart/update', [CartController::class, 'update'])->name('cart.update');
Route::delete('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');

// Checkout
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout.store');

// Payment
// Route::get('/payment/{orderNumber}', [PaymentController::class, 'show'])->name('payment');
// Route::post('/payment/{orderNumber}', [PaymentController::class, 'process'])->name('payment.process');

// Transfer payment page
Route::get('/payment/transfer/{orderNumber}', function($orderNumber) {
    $order = \App\Models\Order::where('order_number', $orderNumber)->firstOrFail();
    return view('transfer', compact('order'));
})->name('payment.transfer');

// Order Tracking
Route::get('/order-tracking', [OrderTrackingController::class, 'index'])->name('order.tracking');
Route::post('/order-tracking', [OrderTrackingController::class, 'track'])->name('order.tracking.search');
Route::get('/order-tracking/{orderNumber}', [OrderTrackingController::class, 'show'])->name('order.tracking.show');

// ==============================
// Authentication Routes
// ==============================
Route::get('/admin/login', [LoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [LoginController::class, 'login'])->name('admin.login.submit');
Route::get('/admin/logout', [LoginController::class, 'logout'])->name('admin.logout');

// ==============================
// Admin Routes (Protected)
// ==============================
Route::prefix('admin')
    ->name('admin.')
    ->middleware(['admin'])
    ->group(function () {

        // Dashboard
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        // ======================
        // Category Management
        // ======================
        Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
        Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
        Route::post('/categories/store', [CategoryController::class, 'store'])->name('store.category');
        Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
        Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
        Route::get('/categories/{category}/delete', [CategoryController::class, 'destroy'])->name('deleteCategory');

        // ======================
        // Food Items CRUD
        // ======================
        Route::resource('food-items', FoodItemController::class);

        // ======================
        // Orders Management
        // ======================
        Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
        Route::get('/orders/{order}', [OrderController::class, 'show'])->name('orders.show');
        Route::post('/orders/{order}/confirm-payment', [OrderController::class, 'confirmPayment'])->name('orders.confirm-payment');
        Route::post('/orders/{order}/update-status', [OrderController::class, 'updateStatus'])->name('orders.update-status');
    });
