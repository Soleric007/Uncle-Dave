<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FoodItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FoodItemController extends Controller
{
    public function index()
    {
        $foodItems = FoodItem::latest()->paginate(15);
        return view('admin.food-items.index', compact('foodItems'));
    }

    public function create()
    {
        return view('admin.food-items.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'category' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_available' => 'boolean'
        ]);

        $data = $request->except('image');

        if($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('food-items', 'public');
        }

        FoodItem::create($data);

        return redirect()->route('admin.food-items.index')
            ->with('success', 'Food item created successfully');
    }

    public function edit(FoodItem $foodItem)
    {
        return view('admin.food-items.edit', compact('foodItem'));
    }

    public function update(Request $request, FoodItem $foodItem)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'category' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_available' => 'boolean'
        ]);

        $data = $request->except('image');

        if($request->hasFile('image')) {
            // Delete old image
            if($foodItem->image) {
                Storage::disk('public')->delete($foodItem->image);
            }
            $data['image'] = $request->file('image')->store('food-items', 'public');
        }

        $foodItem->update($data);

        return redirect()->route('admin.food-items.index')
            ->with('success', 'Food item updated successfully');
    }

    public function destroy(FoodItem $foodItem)
    {
        if($foodItem->image) {
            Storage::disk('public')->delete($foodItem->image);
        }

        $foodItem->delete();

        return redirect()->route('admin.food-items.index')
            ->with('success', 'Food item deleted successfully');
    }
}
