<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'price',
        'quantity_available',
    ];

    // A product can have many transactions
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
