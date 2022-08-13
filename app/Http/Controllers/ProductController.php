<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends MainController
{
    public function index()
    {
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
