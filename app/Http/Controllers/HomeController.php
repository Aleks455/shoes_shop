<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\SliderImage;
use Illuminate\Http\Request;

class HomeController extends MainController
{
    public function index()
    {
        $slider_images = new SliderImage();
        $slider_images = $slider_images->getSliderImages();
        $this->data['slider_images'] = $slider_images;
        $products = new Product();
        $result = $products->selectProducts();
        $this->data['products'] = $result;

        return view('home', ['data' => $this->data]);
    }
}
