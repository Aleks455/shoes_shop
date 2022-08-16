<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            ['name' => 'White Shirt', 'description' => 'Cotton short sleves shirt', 'price' => 32, 'image' => 'prod1.jpg', 'category' => 1],
            ['name' => 'Black Shoes', 'description' => 'Laher black men\'s shoes', 'price' => 400, 'image' => 'prod2.jpg', 'category' => 2],
            ['name' => 'Sandals', 'description' => 'Flat orange women\'s sandals', 'price' => 55, 'image' => 'prod1.jpg', 'category' => 3],
            ['name' => 'Yellow Dress', 'description' => 'Long summer dress', 'price' => 22, 'image' => 'prod2.jpg', 'category' => 1],
            ['name' => 'Blue Jeans', 'description' => 'Classic blue jeans for men', 'price' => 44, 'image' => 'prod1.jpg', 'category' => 2],
            ['name' => 'Black Skirt', 'description' => 'Short black skirt for night out', 'price' => 36, 'image' => 'prod2.jpg', 'category' => 3],

        ];

        foreach ($products as $product) {
            DB::table('products')->insert([
                'id' => null,
                'name' => $product['name'],
                'description' => $product['description'],
                'price' => $product['price'],
                'image' => $product['image'],
                'category_id' => $product['category']
            ]);
        }
    }
}
