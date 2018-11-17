<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Smartdevice;
use App\Accessory;

class AccessoryController extends Controller
{
    public function getAddAccessory()
    {
    	return view('employee.pages.accessory.add_accessory');
    }

    public function getEditAccessory($id)
    {
        $accessory=new Accessory;
        $accessory=$accessory->search($id);
        return view('employee.pages.accessory.edit_accessory',['accessory'=>$accessory['accessory'],'product'=>$accessory['product']]);
    }

    public function getListAccessory()
    {
        $list=Accessory::all();
        return view('employee.pages.accessory.list_accessory',['list'=>$list]);
    }

    public function getDeleteAccessory($id)
    {
        $accessory=new Accessory;
        $accessory->doDelete($id);
        echo "Đã xóa xong";
    }

    public function postEditAccessory(Request $req)
    {

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

        $accessory=new Accessory;
        if($req->hasFile('imagesurl')){
             $accessory->edit($id,$productName,$quantity,$purchase,$price,$discountPercent,$productType,$weight,$madein,$status,$imagesurl,$gift,$description,true);
        }
        else{
            $accessory->edit($id,$productName,$quantity,$purchase,$price,$discountPercent,$productType,$weight,$madein,$status,$req->old_imagesurl,$gift,$description,false);
        }
        
        echo "Sửa Phụ Kiện Thành Công";
    }

    public function postAddAccessory(Request $req)
    {
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

    	$accessory=new Accessory;
    	$accessory->add($productName,$quantity,$purchase,$price,$discountPercent,$productType,$weight,$madein,$status,$imagesurl,$gift,$description);

    	echo "Thêm Điện Thoại Thành Công";
    }
}
