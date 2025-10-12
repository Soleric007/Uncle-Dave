<?php

namespace App\Http\Controllers;

use App\Models\FoodItem;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);
        $cartTotal = $this->calculateCartTotal($cart);

        return view('cart-page', compact('cart', 'cartTotal'));
    }

    public function add(Request $request)
    {
        $request->validate([
            'food_item_id' => 'required|exists:food_items,id',
            'quantity' => 'required|integer|min:1'
        ]);

        $foodItem = FoodItem::findOrFail($request->food_item_id);

        $cart = session()->get('cart', []);

        if(isset($cart[$foodItem->id])) {
            $cart[$foodItem->id]['quantity'] += $request->quantity;
        } else {
            $cart[$foodItem->id] = [
                'name' => $foodItem->name,
                'price' => $foodItem->price,
                'quantity' => $request->quantity,
                'image' => $foodItem->image
            ];
        }

        session()->put('cart', $cart);

        return response()->json([
            'success' => true,
            'message' => 'Item added to cart',
            'cartCount' => count($cart)
        ]);
    }

    public function update(Request $request)
    {
        $cart = session()->get('cart', []);

        if(isset($cart[$request->id])) {
            $cart[$request->id]['quantity'] = $request->quantity;
            session()->put('cart', $cart);
        }

        $cartTotal = $this->calculateCartTotal($cart);

        return response()->json([
            'success' => true,
            'cartTotal' => $cartTotal
        ]);
    }

    public function remove($id)
    {
        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return redirect()->back()->with('success', 'Item removed from cart');
    }

    private function calculateCartTotal($cart)
    {
        $subtotal = 0;
        foreach($cart as $item) {
            $subtotal += $item['price'] * $item['quantity'];
        }

        $deliveryFee = 2.00;
        $tax = $subtotal * 0.08; // 8% tax
        $total = $subtotal + $deliveryFee + $tax;

        return [
            'subtotal' => $subtotal,
            'deliveryFee' => $deliveryFee,
            'tax' => $tax,
            'total' => $total
        ];
    }
}
