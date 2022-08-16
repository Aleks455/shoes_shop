<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'Pants',
            'T-shirts',
            'Shoes',
        ];

        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'id' => null,
                'name' => $category
            ]);
        } 
    }
}
