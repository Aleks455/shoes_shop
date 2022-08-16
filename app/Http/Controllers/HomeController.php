<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\SliderImage;
use Illuminate\Http\Request;

class HomeController extends MainController
{
    private $productModel;
    private $sliderModel;

    public function index()
    {
        $this->sliderModel = new SliderImage();
        $slider_images = $this->sliderModel->getSliderImages();
        $this->data['slider_images'] = $slider_images;

        $this->productModel = new Product();
        $result = $this->productModel->selectProducts();
        $this->data['products'] = $result;

        return view('pages.main.home', ['data' => $this->data]);
    }
}
