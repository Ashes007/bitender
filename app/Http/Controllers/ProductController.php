<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function details()
    {
    	return view('product.details');
    }

    public function lists()
    {
    	return view('product.list');
    }
}
