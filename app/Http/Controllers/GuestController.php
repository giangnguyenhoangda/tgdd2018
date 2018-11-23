<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Smartphone;
use Illuminate\Support\Facades\DB;
use App\News;
use App\Tablet;
use App\Accessory;

class GuestController extends Controller
{
    public function getHome()
    {
        $s=new Smartphone;
    	$smartphones=$s->doWhere('productType','=','iphone');
        $smartphones1=$s->doWhere('product.discountPercent','>',0);
    	$tablets=Tablet::all();
    	$accessorys=Accessory::all();
    	$news=News::take(3)->get();
    	$news1=News::skip(3)->take(3)->get();
    	$news2=News::skip(6)->take(3)->get();
    	return view('guest.pages.home',['smartphones'=>$smartphones,'smartphones1'=>$smartphones1,'tablets'=>$tablets,'accessorys'=>$accessorys,'news'=>$news,'news1'=>$news1,'news2'=>$news2]);
        // var_dump($tablets);
    }

    public function getDevelopingPage()
    {
    	return view('guest.pages.developing-pages');
    }

    public function getHelp()
    {
        return view('guest.pages.huong-dan');
    }
}
