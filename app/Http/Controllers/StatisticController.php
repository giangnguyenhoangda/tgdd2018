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

    public function getIncomeStatistic()
    {
        return view('admin.pages.income_statistic');
    }

    public function getProfitStatistic()
    {
        return view('admin.pages.profit_statistic');
    }

    public function postSaleStatistic(Request $req)
    {
    	$timestart=$req->timestart;
    	$timeend=$req->timeend;
    	$str='';
    	$str.='<tr>';
		$str.='				<td>1</td>';
		$str.='				<td>1/10/2018</td>';
		$str.='				<td>22000000</td>';
		$str.='			</tr>';
		$data=array('str'=>$str,'total'=>1);
    	return $data;
    }

    public function postIncomeStatistic(Request $req)
    {
    	$timestart=$req->timestart;
    	$timeend=$req->timeend;
    	$str='';
    	$str.='<tr>';
		$str.='				<td>1</td>';
		$str.='				<td>1/10/2018</td>';
		$str.='				<td>22000000</td>';
		$str.='			</tr>';
		$data=array('str'=>$str,'total'=>1);
    	return $data;
    }

    public function postProfitStatistic(Request $req)
    {
    	$timestart=$req->timestart;
    	$timeend=$req->timeend;
    	$str='';
    	$str.='<tr>';
		$str.='				<td>1</td>';
		$str.='				<td>1/10/2018</td>';
		$str.='				<td>22000000</td>';
		$str.='			</tr>';
		$data=array('str'=>$str,'total'=>1);
    	return $data;
    }
}
