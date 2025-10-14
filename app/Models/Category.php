<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    /**
     * Get all food items that belong to this category
     * Using string comparison instead of foreign key
     */
    public function foodItems()
    {
        return $this->hasMany(FoodItem::class, 'category', 'name');
    }
}
