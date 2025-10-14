<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FoodItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Category;

class FoodItemController extends Controller
{
    /**
     * Display a listing of the food items.
     */
    public function index()
    {
        $foodItems = FoodItem::latest()->paginate(15);
        return view('admin.pages.food', compact('foodItems'));
    }

    /**
     * Show the form for creating a new food item.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.pages.createfood', compact('categories'));
    }

    /**
     * Store a newly created food item in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'         => 'required|string|max:255',
            'description'  => 'required|string',
            'price'        => 'required|numeric|min:0',
            'category'     => 'nullable|string|max:100',
            'image'        => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_available' => 'boolean'
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('food-items', 'public');
        }

        FoodItem::create($validated);

        return redirect()
            ->route('admin.food-items.index')
            ->with('success', '✅ Food item created successfully.');
    }

    /**
     * Show the form for editing the specified food item.
     */
    public function edit(FoodItem $foodItem)
    {
        $categories = Category::all();
        return view('admin.pages.fooddetails', compact('foodItem', 'categories'));
    }

    /**
     * Update the specified food item in storage.
     */
    public function update(Request $request, FoodItem $foodItem)
    {
        $validated = $request->validate([
            'name'         => 'required|string|max:255',
            'description'  => 'required|string',
            'price'        => 'required|numeric|min:0',
            'category'     => 'nullable|string|max:100',
            'image'        => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_available' => 'boolean'
        ]);

        if ($request->hasFile('image')) {
            if ($foodItem->image) {
                Storage::disk('public')->delete($foodItem->image);
            }
            $validated['image'] = $request->file('image')->store('food-items', 'public');
        }

        $foodItem->update($validated);

        return redirect()
            ->route('admin.food-items.index')
            ->with('success', '✅ Food item updated successfully.');
    }

    /**
     * Remove the specified food item from storage.
     */
    public function destroy(FoodItem $foodItem)
    {
        if ($foodItem->image) {
            Storage::disk('public')->delete($foodItem->image);
        }

        $foodItem->delete();

        return redirect()
            ->route('admin.food-items.index')
            ->with('success', '🗑️ Food item deleted successfully.');
    }
}
