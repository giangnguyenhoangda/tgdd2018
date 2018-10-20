<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function getLogin()
    {
    	return view('admin.pages.login');
    }

    public function getHome()
    {
    	return view('admin.pages.home');
    }
}
