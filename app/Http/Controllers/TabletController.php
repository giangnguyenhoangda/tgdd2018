<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Smartdevice;
use App\Tablet;

class TabletController extends Controller
{
    public function getAddTablet()
    {
    	return view('employee.pages.tablet.add_tablet');
    }

    public function getEditTablet($id)
    {
        $tablet=new Tablet;
        $tablet=$tablet->search($id);
        return view('employee.pages.tablet.edit_tablet',['tablet'=>$tablet['tablet'],'product'=>$tablet['product'],'smartdevice'=>$tablet['smartdevice']]);
    }

    public function getListTablet()
    {
        $list=Tablet::all();
        return view('employee.pages.tablet.list_tablet',['list'=>$list]);
    }

    public function getDeleteTablet($id)
    {
        $tablet=new Tablet;
        $tablet->doDelete($id);
        echo "Đã xóa xong";
    }

    public function postEditTablet(Request $req)
    {
        
        $firstcamera=$req->firstcamera;
        $second=$req->second;
        $chipset=$req->chipset;
        $gpu=$req->gpu;
        $ram=$req->ram;
        $connections=$req->connections;
        $memory=$req->memory;
        $battery=$req->battery;
        $design=$req->design;
        $utility=$req->utility;
        $screen=$req->screen;

        $id=$req->id;
        $productName=$req->productName;
        $quantity=$req->quantity;
        $purchase=$req->purchase;
        $price=$req->price;
        $discountPercent=$req->discountPercent;
        $productType=$req->productType;
        $weight=$req->weight;
        $madein=$req->madein;
        $status=$req->status; 
        $imagesurl=$req->imagesurl; 
        $gift=$req->gift;
        $description=$req->description;

        $sim=$req->sim;

        $tablet=new Tablet;
        if($req->hasFile('imagesurl')){
             $tablet->edit($id,$productName,$quantity,$purchase,$price,$discountPercent,$productType,$weight,$madein,$status,$imagesurl,$gift,$firstcamera,$second,$chipset,$gpu,$ram,$connections,$memory,$battery,$design,$utility,$screen,$sim,$description,true);
        }
        else{
            $tablet->edit($id,$productName,$quantity,$purchase,$price,$discountPercent,$productType,$weight,$madein,$status,$req->old_imagesurl,$gift,$firstcamera,$second,$chipset,$gpu,$ram,$connections,$memory,$battery,$design,$utility,$screen,$sim,$description,false);
        }
        
        echo "Sửa Máy Tính Bảng Thành Công";
    }

    public function postAddTablet(Request $req)
    {
    	
    	$firstcamera=$req->firstcamera;
    	$second=$req->second;
    	$chipset=$req->chipset;
    	$gpu=$req->gpu;
    	$ram=$req->ram;
    	$connections=$req->connections;
    	$memory=$req->memory;
    	$battery=$req->battery;
    	$design=$req->design;
    	$utility=$req->utility;
    	$screen=$req->screen;

    	$productName=$req->productName;
    	$quantity=$req->quantity;
    	$purchase=$req->purchase;
    	$price=$req->price;
    	$discountPercent=$req->discountPercent;
    	$productType=$req->productType;
    	$weight=$req->weight;
    	$madein=$req->madein;
    	$status=$req->status; 
        $imagesurl=$req->imagesurl; 
    	$gift=$req->gift;
        $description=$req->description;

    	$sim=$req->sim;

    	$tablet=new Tablet;
    	$tablet->add($productName,$quantity,$purchase,$price,$discountPercent,$productType,$weight,$madein,$status,$imagesurl,$gift,$firstcamera,$second,$chipset,$gpu,$ram,$connections,$memory,$battery,$design,$utility,$screen,$sim,$description);

    	echo "Thêm Máy Tính Bảng Thành Công";
    }
}