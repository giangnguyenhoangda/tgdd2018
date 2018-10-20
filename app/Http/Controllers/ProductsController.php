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

    public function getAddProductPage()
    {
    	return view('employee/pages/add_product');
    }

    public function getProductList()
    {
    	return view('employee/pages/smartphone_list');
    }
}
