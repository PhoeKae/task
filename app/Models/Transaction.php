<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'user_id',
        'product_id',
        'quantity_purchased',
        'total_amount',
    ];

    // A transaction belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // A transaction belongs to a product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
