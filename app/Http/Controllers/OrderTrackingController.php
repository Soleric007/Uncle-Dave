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
            'order_number' => 'required|string'
        ]);

        $order = Order::where('order_number', $request->order_number)
            ->with('orderItems')
            ->first();

        if(!$order) {
            return redirect()->back()->with('error', 'Order not found');
        }

        return view('order-tracking', compact('order'));
    }

    public function show($orderNumber)
    {
        $order = Order::where('order_number', $orderNumber)
            ->with('orderItems')
            ->firstOrFail();

        return view('order-tracking', compact('order'));
    }
}
