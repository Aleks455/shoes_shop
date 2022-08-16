<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    use HasFactory;

    public function selectProducts()
    {
        $result = DB::select('select * from products ORDER BY name');
        return $result;
    }
    
}
