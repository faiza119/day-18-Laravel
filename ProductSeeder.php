<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'Smartphone',
            'price' => 499.99,
            'category_id' => 1
        ]);

        Product::create([
            'name' => 'Laptop',
            'price' => 899.99,
            'category_id' => 1
        ]);

        Product::create([
            'name' => 'Novel',
            'price' => 19.99,
            'category_id' => 2
        ]);

        Product::create([
            'name' => 'T-Shirt',
            'price' => 14.99,
            'category_id' => 3
        ]);
    }
}
