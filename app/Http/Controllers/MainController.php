<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public $data;
    public $menuModel;

    public function __construct()
    {
        $this->menuModel = new Menu();
        $this->data['menu'] = $this->menuModel->getMenu();
    }
}
