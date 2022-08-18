<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategories = ['man', 'woman', 'girl', 'teen', 'forever young', 'classy', 'lux', 'cheeky', 'pop', 'fun', 'chill', 'summer'];

        foreach ($subcategories as $subcategory) 
        {
            DB::table('subcategories')
            ->insert(['name' => $subcategory]);
        }
    }
}
