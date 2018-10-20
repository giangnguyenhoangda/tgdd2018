<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function getNews()
    {
    	return view('guest.pages.news');
    }

    public function getNew()
    {
    	return view('guest.pages.new');
    }

    public function getPostNews()
    {
    	return view('employee.pages.post_new');
    }
}
