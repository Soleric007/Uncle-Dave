<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.pages.index');
    }

    public function about()
    {
        return view('home.pages.about');
    }

    public function contact()
    {
        return view('home.pages.contact');
    }

    public function shop()
    {
        return view('home.pages.shop');
    }

    public function shopDetails()
    {
        return view('home.pages.shop-details');
    }

    public function cart()
    {
        return view('home.pages.cart-page');
    }

    public function checkout()
    {
        return view('home.pages.checkout');
    }

    public function orderTracking()
    {
        return view('home.pages.order-tracking');
    }

    public function faqs()
    {
        return view('home.pages.faqs');
    }

    public function error()
    {
        return view('home.pages.error');
    }
}
