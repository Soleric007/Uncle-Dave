<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);

        if(empty($cart)) {
            return redirect()->route('shop')->with('error', 'Your cart is empty');
        }

        $cartTotal = $this->calculateCartTotal($cart);

        return view('checkout', compact('cart', 'cartTotal'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'customer_name' => 'required|string|max:255',
            'customer_email' => 'required|email',
            'customer_phone' => 'required|string',
            'delivery_address' => 'required|string',
            'payment_method' => 'required|string'
        ]);

        $cart = session()->get('cart', []);

        if(empty($cart)) {
            return redirect()->route('shop')->with('error', 'Your cart is empty');
        }

        $cartTotal = $this->calculateCartTotal($cart);

        // Create order
        $order = Order::create([
            'order_number' => Order::generateOrderNumber(),
            'customer_name' => $request->customer_name,
            'customer_email' => $request->customer_email,
            'customer_phone' => $request->customer_phone,
            'delivery_address' => $request->delivery_address,
            'subtotal' => $cartTotal['subtotal'],
            'delivery_fee' => $cartTotal['deliveryFee'],
            'tax' => $cartTotal['tax'],
            'total' => $cartTotal['total'],
            'payment_method' => $request->payment_method
        ]);

        // Create order items
        foreach($cart as $id => $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'food_item_id' => $id,
                'food_name' => $item['name'],
                'price' => $item['price'],
                'quantity' => $item['quantity'],
                'subtotal' => $item['price'] * $item['quantity']
            ]);
        }

        // Clear cart
        session()->forget('cart');

        // Redirect to payment page
        return redirect()->route('payment', $order->order_number);
    }

    private function calculateCartTotal($cart)
    {
        $subtotal = 0;
        foreach($cart as $item) {
            $subtotal += $item['price'] * $item['quantity'];
        }

        $deliveryFee = 2.00;
        $tax = $subtotal * 0.08;
        $total = $subtotal + $deliveryFee + $tax;

        return [
            'subtotal' => $subtotal,
            'deliveryFee' => $deliveryFee,
            'tax' => $tax,
            'total' => $total
        ];
    }
}
