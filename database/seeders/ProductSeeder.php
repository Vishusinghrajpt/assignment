<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Define an array of products
        $products = [
            [
                'name' => 'Product 1',
                'price' => 100.00,
                'quantity' => 10,
                'total_amount' => 1000.00
            ],
            [
                'name' => 'Product 2',
                'price' => 150.50,
                'quantity' => 5,
                'total_amount' => 150.50*5
            ],
            [
                'name' => 'Product 3',
                'price' => 250.75,
                'quantity' => 20,
                'total_amount' => 250.75*20
            ],
            [
                'name' => 'Product 4',
                'price' => 300.00,
                'quantity' => 15,
                'total_amount' => 300.00*15
            ],
            [
                'name' => 'Product 5',
                'price' => 400.30,
                'quantity' => 25,
                'total_amount' => 400.30*25
            ],
        ];

        // Insert the products array into the database
        Product::insert($products);
    }
}
