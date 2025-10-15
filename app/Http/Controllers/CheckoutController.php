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

        if (empty($cart)) {
            return redirect()->route('shop')->with('error', 'Your cart is empty');
        }

        $cartTotal = $this->calculateCartTotal($cart);

        return view('checkout', compact('cart', 'cartTotal'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'customer_name' => 'required|string|max:255',
            'customer_email' => 'required|email|max:255',
            'customer_phone' => 'required|string|max:20',
            'delivery_address' => 'required|string',
            'payment_method' => 'required|in:bank_transfer,cash_on_delivery',
        ]);

        $cartItems = session('cart', []);

        if (empty($cartItems)) {
            return redirect()->route('shop')->with('error', 'Your cart is empty');
        }

        $subtotal = array_sum(array_map(function ($item) {
            return $item['price'] * $item['quantity'];
        }, $cartItems));

        $deliveryFee = 1000;

        $total = $subtotal + $deliveryFee;

        // Create order
        $order = Order::create([
            'order_number' => Order::generateOrderNumber(),
            'customer_name' => $validated['customer_name'],
            'customer_email' => $validated['customer_email'],
            'customer_phone' => $validated['customer_phone'],
            'delivery_address' => $validated['delivery_address'],
            'subtotal' => $subtotal,
            'delivery_fee' => $deliveryFee,
            'total' => $total,
            'payment_method' => $validated['payment_method'],
            'payment_status' => 'pending',
            'order_status' => 'pending',
        ]);

        // Create order items
        foreach ($cartItems as $foodId => $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'food_item_id' => $foodId, // ← Use array key as the food ID
                'food_name' => $item['name'],
                'price' => $item['price'],
                'quantity' => $item['quantity'],
                'subtotal' => $item['price'] * $item['quantity'],
            ]);
        }


        // Clear cart
        session()->forget('cart');
        session()->flash('tracking_url', $order->tracking_url);
        session()->flash('order_number', $order->order_number);

        // Redirect based on payment method
        if ($validated['payment_method'] === 'bank_transfer') {
            return redirect()->route('payment.transfer', $order->order_number);
        } else {
            // Cash on delivery - go to order tracking
            return redirect()->route('order.tracking.show', $order->order_number)
                ->with('success', 'Order placed successfully! We will deliver to you soon.');
        }
    }

    private function calculateCartTotal($cart)
    {
        $subtotal = 0;
        foreach ($cart as $item) {
            $subtotal += $item['price'] * $item['quantity'];
        }

        $deliveryFee = 1000.00;

        $total = $subtotal + $deliveryFee;

        return [
            'subtotal' => $subtotal,
            'deliveryFee' => $deliveryFee,

            'total' => $total
        ];
    }
}
