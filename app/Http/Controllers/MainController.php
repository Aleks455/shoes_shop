<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public array $data;

    public function __construct()
    {
        $this->data['meni'] = [
            [
                'name' => 'Home',
                'route' => 'home'
            ],
            [
                'name' => 'Products',
                'route' => 'products'
            ],
            [
                'name' => 'Contact',
                'route' => 'contact'
            ],
            [
                'name' => 'Testing',
                'route' => 'testing'
            ],
        ];
    }
}
