<?php
// app/Http/Controllers/Admin/DashboardController.php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\FoodItem;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total_orders' => Order::count(),
            'pending_orders' => Order::where('order_status', 'pending')->count(),
            'total_revenue' => Order::where('payment_status', 'confirmed')->sum('total'),
            'total_food_items' => FoodItem::count()
        ];

        $recentOrders = Order::latest()->take(10)->get();

        // Changed to match your file structure: admin.pages.dashboard
        return view('admin.pages.dashboard', compact('stats', 'recentOrders'));
    }
}
