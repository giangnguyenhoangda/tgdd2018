<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Smartphone;
use Session;
use App\Cart;

class ProductsController extends Controller
{
    public function getSearch()
    {
    	
    }

    public function getProduct($id)
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

    public function getDeleteProductInCart($id)
    {
        $cart = Session::get('cart');
        $cart->remove($id);
        if($cart->items==null){
            Session::forget('cart');
        }
        return redirect('gio-hang');
    }
}
