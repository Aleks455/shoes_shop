<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SliderImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images = [
            'https://image.shutterstock.com/image-photo/white-flying-cotton-tshirt-blue-600w-1912350304.jpg',
            'https://image.shutterstock.com/image-illustration/clothes-on-grunge-background-shelf-600w-1867100056.jpg',
            'https://image.shutterstock.com/image-illustration/clothes-on-grunge-background-shelf-600w-1923331256.jpg',
        ];

        foreach ($images as $image)
        {
            DB::insert('insert into slider_images (id, name) values (?, ?)', [null, $image]);
        }
    }
}
