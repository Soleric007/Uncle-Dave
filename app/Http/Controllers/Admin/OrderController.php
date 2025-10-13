<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('orderItems')->latest()->paginate(20);
        return view('admin.orders.index', compact('orders'));
    }

    public function show(Order $order)
    {
        $order->load('orderItems');
        return view('admin.orders.show', compact('order'));
    }

    public function confirmPayment(Order $order)
    {
        $order->update([
            'payment_status' => 'confirmed',
            'order_status' => 'payment_confirmed',
            'payment_confirmed_at' => now(),
        ]);

        return redirect()->back()->with('success', 'Payment confirmed successfully.');
    }

    public function updateStatus(Request $request, Order $order)
    {
        $request->validate([
            'status' => 'required|in:payment_confirmed,cooking,ready,out_for_delivery,delivered',
        ]);

        $statusTimestamps = [
            'payment_confirmed' => 'payment_confirmed_at',
            'cooking' => 'cooking_started_at',
            'ready' => 'ready_at',
            'out_for_delivery' => 'out_for_delivery_at',
            'delivered' => 'delivered_at',
        ];

        $updateData = ['order_status' => $request->status];

        if (isset($statusTimestamps[$request->status])) {
            $updateData[$statusTimestamps[$request->status]] = now();
        }

        $order->update($updateData);

        return redirect()->back()->with('success', 'Order status updated successfully.');
    }
}
