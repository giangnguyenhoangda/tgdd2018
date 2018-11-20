<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tablet extends Model
{
    protected $table='tablet';
    public $timestamps=false;
    protected $primaryKey='id';

    public function add($productName,$quantity,$purchase,$price,$discountPercent,$productType,$weight,$madein,$status,$imagesurl,$gift,$firstcamera,$second,$chipset,$gpu,$ram,$connections,$memory,$battery,$design,$utility,$screen,$sim,$description)
    {
    	$smartdevice=new Smartdevice;
    	$product=new Product;

    	$tablet=new Tablet;
    	$tablet->productid=$product->add($productName,$quantity,$purchase,$price,$discountPercent,$productType,$weight,$madein,$status,$imagesurl,$gift,$description);
    	$tablet->smartdeviceid=$smartdevice->add($firstcamera,$second,$chipset,$gpu,$ram,$connections,$memory,$battery,$design,$utility,$screen);
        $tablet->sim=$sim;
    	$tablet->save();
    }

    public function edit($id,$productName,$quantity,$purchase,$price,$discountPercent,$productType,$weight,$madein,$status,$imagesurl,$gift,$firstcamera,$second,$chipset,$gpu,$ram,$connections,$memory,$battery,$design,$utility,$screen,$sim,$description,$isLogoNew)
    {
        $smartdevice=new Smartdevice;
        $product=new Product;

        $tablet=Tablet::find($id);
        $product->edit($tablet->productid,$productName,$quantity,$purchase,$price,$discountPercent,$productType,$weight,$madein,$status,$imagesurl,$gift,$description,$isLogoNew);
        $smartdevice->edit($tablet->smartdeviceid,$firstcamera,$second,$chipset,$gpu,$ram,$connections,$memory,$battery,$design,$utility,$screen);
        $tablet->sim=$sim;
        $tablet->save();
    }

    public function search($id)
    {
    	$tablet=Tablet::find($id);
        $product=Product::find($tablet->productid)->toArray();
        $smartdevice=Smartdevice::find($tablet->smartdeviceid)->toArray();
        $tablet=$tablet->toArray();
        return array('tablet'=>$tablet,'product'=>$product,'smartdevice'=>$smartdevice);
    }

    public function isProduct()
    {
        return $this->belongsTo('App\Product','productid','id');
    }

    public function getSmartDevice()
    {
        return $this->belongsTo('App\Smartdevice','smartdeviceid','id');
    }

    public function doDelete($id)
    {
        $tablet=Tablet::find($id);
        $product=Product::find($tablet->productid);
        $smartdevice=Smartdevice::find($tablet->smartdeviceid);
        $tablet->delete();
        $smartdevice->delete();
        $product->delete();
    }
}
