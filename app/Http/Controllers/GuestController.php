<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function getHome()
    {
    	return view('guest.pages.home');
    }

    public function getDevelopingPage()
    {
    	return view('guest.pages.developing-pages');
    }
}
