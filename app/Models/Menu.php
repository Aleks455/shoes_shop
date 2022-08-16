<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Menu extends Model
{
    use HasFactory;
    
    public function getMenu()
    {
        $result = DB::table('menu')
        ->select('name', 'route')
        ->orderBy('order')
        ->get();

        return $result;
    }
}
