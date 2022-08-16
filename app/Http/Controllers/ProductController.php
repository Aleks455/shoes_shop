<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends MainController
{
    public function __construct()
    {
        parent::__construct();
        $category = new Category();
        $this->data['categories'] = $category->getCategories(); 
    }

    public function index()
    {
        $products = new Product();
        $result = $products->selectProducts();
        $this->data['products'] = $result;

        return view('pages.products.index', $this->data);
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        $this->data['product'] = $product;

        return view('pages.products.show', $this->data);
    }

}
