<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Smartdevice;
use App\Product;

class Laptop extends Model
{
    protected $table='laptop';
    public $timestamps=false;
    protected $primaryKey='id';


    public function add($productName,$quantity,$purchase,$price,$discountPercent,$productType,$weight,$madein,$status,$imagesurl,$gift,$firstcamera,$chipset,$gpu,$ram,$connections,$memory,$battery,$design,$utility,$screen,$keyboard,$description)
    {
    	$smartdevice=new Smartdevice;
    	$product=new Product;

    	$laptop=new Laptop;
    	$laptop->productid=$product->add($productName,$quantity,$purchase,$price,$discountPercent,$productType,$weight,$madein,$status,$imagesurl,$gift,$description);
    	$laptop->smartdeviceid=$smartdevice->add($firstcamera,null,$chipset,$gpu,$ram,$connections,$memory,$battery,$design,$utility,$screen);
    	$laptop->keyboard=$keyboard;
    	$laptop->save();
    }

    public function getSmartDevice()
    {
        return $this->belongsTo('App\Smartdevice','smartdeviceid','id');
    }

    public function isProduct()
    {
        return $this->belongsTo('App\Product','productid','id');
    }

    public function search($id)
    {
    	$laptop=Laptop::find($id);
        $product=Product::find($laptop->productid)->toArray();
        $smartdevice=Smartdevice::find($laptop->smartdeviceid)->toArray();
        $laptop=$laptop->toArray();
        return array('laptop'=>$laptop,'product'=>$product,'smartdevice'=>$smartdevice);
    }

    public function edit($id,$productName,$quantity,$purchase,$price,$discountPercent,$productType,$weight,$madein,$status,$imagesurl,$gift,$firstcamera,$chipset,$gpu,$ram,$connections,$memory,$battery,$design,$utility,$screen,$keyboard,$description,$isLogoNew)
    {
        $smartdevice=new Smartdevice;
        $product=new Product;

        $laptop=Laptop::find($id);
        $product->edit($laptop->productid,$productName,$quantity,$purchase,$price,$discountPercent,$productType,$weight,$madein,$status,$imagesurl,$gift,$description,$isLogoNew);
        $smartdevice->edit($laptop->smartdeviceid,$firstcamera,null,$chipset,$gpu,$ram,$connections,$memory,$battery,$design,$utility,$screen);
        $laptop->keyboard=$keyboard;
        $laptop->save();
    }

    public function doDelete($id)
    {
        $laptop=Laptop::find($id);
        $product=Product::find($laptop->productid);
        $smartdevice=Smartdevice::find($laptop->smartdeviceid);
        $laptop->delete();
        $smartdevice->delete();
        $product->delete();
    }
}
