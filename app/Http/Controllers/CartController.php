<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class CartController extends Controller
{
    public function getCart()
    {
    	return view('guest.pages.cart');
    }

    public function postUpdateCart(Request $req)
    {
    	$cart=Session::get('cart');
    	$items=$cart->items;
    	foreach ($items as $key => $value) {
    		$qty=$req->cart[$key];
    		$cart->updateCart($key,$qty);
    	}
    	return redirect('gio-hang');
    }
}
