<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Smartdevice;
use App\Smartphone;

class SmartPhoneController extends Controller
{
    public function getAddSmartPhone()
    {
    	return view('employee.pages.smartphone.add_smartphone');
    }

    public function getEditSmartPhone($id)
    {
        $smartphone=new Smartphone;
        $smartphone=$smartphone->search($id);
        return view('employee.pages.smartphone.edit_smartphone',['smartphone'=>$smartphone['smartphone'],'product'=>$smartphone['product'],'smartdevice'=>$smartphone['smartdevice']]);
    }

    public function getListSmartPhone()
    {
        $list=Smartphone::all();
        return view('employee.pages.smartphone.list_smartphone',['list'=>$list]);
    }

    public function getDeleteSmartPhone($id)
    {
        $smartphone=new Smartphone;
        $smartphone->doDelete($id);
        echo "Đã xóa xong";
    }

    public function postEditSmartPhone(Request $req)
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

        $smartphone=new Smartphone;
        if($req->hasFile('imagesurl')){
             $smartphone->edit($id,$productName,$quantity,$purchase,$price,$discountPercent,$productType,$weight,$madein,$status,$imagesurl,$gift,$firstcamera,$second,$chipset,$gpu,$ram,$connections,$memory,$battery,$design,$utility,$screen,$sim,$description,true);
        }
        else{
            $smartphone->edit($id,$productName,$quantity,$purchase,$price,$discountPercent,$productType,$weight,$madein,$status,$req->old_imagesurl,$gift,$firstcamera,$second,$chipset,$gpu,$ram,$connections,$memory,$battery,$design,$utility,$screen,$sim,$description,false);
        }
        
        echo "Sửa Điện Thoại Thành Công";
    }

    public function postAddSmartPhone(Request $req)
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

    	$smartphone=new Smartphone;
    	$smartphone->add($productName,$quantity,$purchase,$price,$discountPercent,$productType,$weight,$madein,$status,$imagesurl,$gift,$firstcamera,$second,$chipset,$gpu,$ram,$connections,$memory,$battery,$design,$utility,$screen,$sim,$description);

    	echo "Thêm Điện Thoại Thành Công";
    }
}
