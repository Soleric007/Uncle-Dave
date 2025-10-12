<?php
// app/Http/Controllers/ShopController.php
namespace App\Http\Controllers;

use App\Models\FoodItem;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $foodItems = FoodItem::where('is_available', true)->paginate(12);
        return view('shop', compact('foodItems'));
    }

    public function show($id)
    {
        $foodItem = FoodItem::findOrFail($id);
        $relatedItems = FoodItem::where('category', $foodItem->category)
            ->where('id', '!=', $id)
            ->where('is_available', true)
            ->limit(3)
            ->get();

        return view('shop-details', compact('foodItem', 'relatedItems'));
    }
}
