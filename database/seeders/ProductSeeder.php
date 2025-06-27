<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{

    public function run(): void
    {
        Product::create([
            'name' => 'Coke',
            'price' => 3.99,
            'quantity_available' => 10,
        ]);

        Product::create([
            'name' => 'Pepsi',
            'price' => 6.885,
            'quantity_available' => 50,
        ]);

        Product::create([
            'name' => 'Water',
            'price' => 0.50,
            'quantity_available' => 20,
        ]);
    }
}
