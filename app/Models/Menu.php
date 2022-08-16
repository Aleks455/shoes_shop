<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    
    public $home = [
        'name' => 'Home',
        'route' => 'home'
    ];

    public $product = [
        'name' => 'Products',
        'route' => 'products'
    ];

    public $contact = [
        'name' => 'Contact',
        'route' => 'contact'
    ];

    public function getMenu()
    {
        $meni = [$this->home, $this->product, $this->contact];
        return $meni;
    }
}
