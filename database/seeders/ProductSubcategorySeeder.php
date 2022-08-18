<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['product_id' => 1, 'subcategory_id' => 1],
            ['product_id' => 1, 'subcategory_id' => 5],
            ['product_id' => 1, 'subcategory_id' => 6],
            ['product_id' => 1, 'subcategory_id' => 7],
            ['product_id' => 2, 'subcategory_id' => 2],
            ['product_id' => 2, 'subcategory_id' => 5],
            ['product_id' => 2, 'subcategory_id' => 6],
            ['product_id' => 2, 'subcategory_id' => 7],
            ['product_id' => 3, 'subcategory_id' => 3],
            ['product_id' => 3, 'subcategory_id' => 5],
            ['product_id' => 3, 'subcategory_id' => 11],
            ['product_id' => 3, 'subcategory_id' => 10],
            ['product_id' => 4, 'subcategory_id' => 4],
            ['product_id' => 4, 'subcategory_id' => 5],
            ['product_id' => 4, 'subcategory_id' => 6],
            ['product_id' => 4, 'subcategory_id' => 7],
            ['product_id' => 5, 'subcategory_id' => 4],
            ['product_id' => 5, 'subcategory_id' => 8],
            ['product_id' => 5, 'subcategory_id' => 9],
            ['product_id' => 5, 'subcategory_id' => 10],
            ['product_id' => 6, 'subcategory_id' => 2],
            ['product_id' => 6, 'subcategory_id' => 11],
            ['product_id' => 6, 'subcategory_id' => 12],
            ['product_id' => 6, 'subcategory_id' => 6],

        ];

        foreach ($data as $row)
        {
            DB::table('product_subcategory')
            ->insert([
                'product_id' => $row['product_id'],
                'subcategory_id' => $row['subcategory_id']
            ]);
        }
    }
}
