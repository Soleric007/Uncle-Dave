<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->string('tracking_token', 32)->unique()->after('order_number')->nullable();
        });

        // Generate tracking tokens for existing orders
        \App\Models\Order::whereNull('tracking_token')->each(function ($order) {
            $order->update(['tracking_token' => \Illuminate\Support\Str::random(32)]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn('tracking_token');
        });
    }
};
