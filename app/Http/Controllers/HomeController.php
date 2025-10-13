<?php

namespace App\Http\Controllers;

use App\Models\FoodItem;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Fetch available food items for the "Super Delicious Deals" section
        $foodItems = FoodItem::where('is_available', true)
            ->latest()
            ->take(8)
            ->get();

        // Fetch most popular items (you can later replace with real 'orders_count' or rating data)
        $popularItems = FoodItem::where('is_available', true)
            ->inRandomOrder()
            ->take(6)
            ->get();

        // Send both variables to the homepage view
        return view('home.pages.index', compact('foodItems', 'popularItems'));
    }

    public function about() { return view('home.pages.about'); }

    public function contact() { return view('home.pages.contact'); }

    public function faqs() { return view('home.pages.faqs'); }

    public function error() { return view('home.pages.error'); }
}
