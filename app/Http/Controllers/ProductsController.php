<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function getSearch()
    {
    	return view('guest.pages.search-result');
    }

    public function getProduct()
    {
    	return view('guest.pages.product-info');
    }
}
