<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_number')->unique();
            $table->string('customer_name');
            $table->string('customer_email');
            $table->string('customer_phone');
            $table->text('delivery_address');
            $table->decimal('subtotal', 10, 2);
            $table->decimal('delivery_fee', 10, 2)->default(2.00);
            
            $table->decimal('total', 10, 2);
            $table->enum('payment_status', ['pending', 'confirmed', 'failed'])->default('pending');
            $table->enum('order_status', [
                'pending',
                'payment_confirmed',
                'cooking',
                'ready',
                'out_for_delivery',
                'delivered'
            ])->default('pending');
            $table->string('payment_method')->nullable();
            $table->text('payment_reference')->nullable();
            $table->timestamp('payment_confirmed_at')->nullable();
            $table->timestamp('cooking_started_at')->nullable();
            $table->timestamp('ready_at')->nullable();
            $table->timestamp('out_for_delivery_at')->nullable();
            $table->timestamp('delivered_at')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
