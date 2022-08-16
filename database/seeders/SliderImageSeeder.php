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
       
        $data = [
            [
                'image' => '1110x350sl1',
                'alt' => 'First slide',
            ],
            [
                'image' => '1110x350sl2',
                'alt' => 'Second slide',
            ],
            [
                'image' => '1110x350sl3',
                'alt' => 'Third slide',
            ]
        ];

        foreach ($data as $row)
        {
            DB::insert('insert into slider_images (id, name, alt) values (?, ?, ?)', [null, $row['image'], $row['alt']]);
        }
    }
}
