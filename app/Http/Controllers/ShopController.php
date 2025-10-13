<?php

namespace App\Http\Controllers;

use App\Models\FoodItem;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display list of available food items, optionally filtered by category.
     */
    public function index(Request $request)
    {
        $category = $request->query('category');

        $query = FoodItem::where('is_available', true);

        if (!empty($category)) {
            $query->where('category', $category);
        }

        $foodItems = $query->paginate(12);

        $popularItems = FoodItem::where('is_available', true)
            ->inRandomOrder()
            ->take(3)
            ->get();

        return view('shop', compact('foodItems', 'category', 'popularItems'));
    }

    /**
     * Show a single food item with related and popular items.
     */
    public function show($id)
    {
        $foodItem = FoodItem::findOrFail($id);

        $relatedItems = FoodItem::where('category', $foodItem->category)
            ->where('id', '!=', $id)
            ->where('is_available', true)
            ->limit(3)
            ->get();

        $popularItems = FoodItem::where('is_available', true)
            ->orderByDesc('id')
            ->take(6)
            ->get();

        return view('shop-details', compact('foodItem', 'relatedItems', 'popularItems'));
    }
}
