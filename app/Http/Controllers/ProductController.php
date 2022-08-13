<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends MainController
{
    // const PRODUCTS = [
    //     [
    //         'name' => 'Sneakers',
    //         'description' => 'Fensy white sneakers',
    //         'price' => '20',
    //     ],
    //     [
    //         'name' => 'Shorts',
    //         'description' => 'Fensy white shorts',
    //         'price' => '25',
    //     ],
    //     [
    //         'name' => 'Hat',
    //         'description' => 'Oldfasion cilindar hat',
    //         'price' => '14',
    //     ],
    //     [
    //         'name' => 'Jeans',
    //         'description' => 'Short purple jeans',
    //         'price' => '30',
    //     ],
    //     [
    //         'name' => 'Watch',
    //         'description' => 'Cristal watch',
    //         'price' => '180',
    //     ],
    // ];

    public function index()
    {
        // $this->data['products'] = $this::PRODUCTS;

        $products = new Product();
        $result = $products->selectProducts();
        $this->data['products'] = $result;

        return view('home', ['data' => $this->data]);
    }

    public function contactPage()
    {
        return view('contact', ['data' => $this->data]);
    }
    
    public function productPage()
    {
        $products = new Product();
        $result = $products->selectProducts();
        $this->data['products'] = $result;

        return view('products', ['data' => $this->data]);
    }

    public function testing()
    {
        return view('testing', ['data' => $this->data]);
    }
}
