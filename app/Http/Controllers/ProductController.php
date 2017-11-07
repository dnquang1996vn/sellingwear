<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function view()
    {
    	return view('product_list');
    }

    public function create()
    {
    	return view('product_create');
    }
}
