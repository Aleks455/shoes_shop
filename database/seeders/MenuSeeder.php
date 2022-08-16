<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menu =  [
            [
                'name' => 'Home',
                'route' => 'home',
                'order' => 1
            ],
            [
                'name' => 'Products',
                'route' => 'products',
                'order' => 2
            ],
            [
                'name' => 'Contact',
                'route' => 'contact',
                'order' => 3
            ]
        ];

        foreach ($menu as $list) 
        {
            DB::table('menu')->insert([
                'name' => $list['name'],
                'route' => $list['route'], 
                'order' => $list['order']
            ]); 
        }
    }
}
