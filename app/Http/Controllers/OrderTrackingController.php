<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderTrackingController extends Controller
{
    public function index()
    {
        return view('order-tracking');
    }

    public function track(Request $request)
    {
        $request->validate([
            'search' => 'required|string|min:3'
        ], [
            'search.required' => 'Please enter an order number or phone number',
            'search.min' => 'Please enter at least 3 characters'
        ]);

        $searchTerm = $request->input('search');

        // Search by order number or phone number
        $order = Order::where('order_number', $searchTerm)
            ->orWhere('customer_phone', $searchTerm)
            ->with('orderItems.foodItem')
            ->first();

        if (!$order) {
            return redirect()->route('order.tracking')
                ->with('error', 'Order not found. Please check your order number or phone number and try again.');
        }

        return view('order-tracking', compact('order'));
    }

    // Keep this for backward compatibility with existing tracking links
    public function show($token)
    {
        $order = Order::where('tracking_token', $token)
            ->orWhere('order_number', $token)
            ->with('orderItems.foodItem')
            ->first();

        if (!$order) {
            return redirect()->route('order.tracking')
                ->with('error', 'Order not found. Please use the search form to track your order.');
        }

        return view('order-tracking', compact('order'));
    }
}
