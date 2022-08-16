<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SliderImage extends Model
{
    use HasFactory;

    protected $table = 'slider_images';

    public function getSliderImages()
    {
        $result = DB::select('select * from slider_images');
        return $result;
    }
}
