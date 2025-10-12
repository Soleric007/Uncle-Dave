<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function show($orderNumber)
    {
        $order = Order::where('order_number', $orderNumber)->firstOrFail();

        return view('payment', compact('order'));
    }

    public function process(Request $request, $orderNumber)
    {
        $request->validate([
            'payment_reference' => 'required|string'
        ]);

        $order = Order::where('order_number', $orderNumber)->firstOrFail();

        $order->update([
            'payment_reference' => $request->payment_reference,
            'payment_status' => 'pending' // Will be confirmed by admin
        ]);

        return redirect()->route('order.tracking.show', $orderNumber)
            ->with('success', 'Payment submitted successfully. Awaiting admin confirmation.');
    }
}
