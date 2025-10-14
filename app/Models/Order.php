<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_number',
        'customer_name',
        'customer_email',
        'customer_phone',
        'delivery_address',
        'subtotal',
        'delivery_fee',

        'total',
        'payment_status',
        'order_status',
        'payment_method',
        'payment_reference',
        'payment_confirmed_at',
        'cooking_started_at',
        'ready_at',
        'out_for_delivery_at',
        'delivered_at'
    ];

    protected $casts = [
        'subtotal' => 'decimal:2',
        'delivery_fee' => 'decimal:2',
        
        'total' => 'decimal:2',
        'payment_confirmed_at' => 'datetime',
        'cooking_started_at' => 'datetime',
        'ready_at' => 'datetime',
        'out_for_delivery_at' => 'datetime',
        'delivered_at' => 'datetime'
    ];

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

    public static function generateOrderNumber()
    {
        return 'ORD-' . strtoupper(uniqid());
    }

    public function getStatusBadgeAttribute()
    {
        $badges = [
            'pending' => 'warning',
            'payment_confirmed' => 'info',
            'cooking' => 'primary',
            'ready' => 'success',
            'out_for_delivery' => 'info',
            'delivered' => 'success'
        ];

        return $badges[$this->order_status] ?? 'secondary';
    }

    public function getStatusTextAttribute()
    {
        $texts = [
            'pending' => 'Pending Payment',
            'payment_confirmed' => 'Payment Confirmed',
            'cooking' => 'Cooking in Progress',
            'ready' => 'Food Ready',
            'out_for_delivery' => 'Out for Delivery',
            'delivered' => 'Delivered'
        ];

        return $texts[$this->order_status] ?? 'Unknown';
    }
}
