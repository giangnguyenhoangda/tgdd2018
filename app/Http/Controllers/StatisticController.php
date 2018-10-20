<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StatisticController extends Controller
{
    public function getSaleStatistic()
    {
    	return view('admin.pages.sale_statistic');
    }
}
