<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends MainController
{
    public function index()
    {
        return view('pages.main.contact', $this->data);
    }
}
