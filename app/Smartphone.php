<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Smartdevice;
use App\Product;

class Smartphone extends Model
{
    protected $table='smartphone';
    public $timestamps=false;
    protected $primaryKey='id';

    public function add($productName,$quantity,$purchase,$price,$discountPercent,$productType,$weight,$madein,$status,$imagesurl,$gift,$firstcamera,$second,$chipset,$gpu,$ram,$connections,$memory,$battery,$design,$utility,$screen,$sim,$description)
    {
    	$smartdevice=new Smartdevice;
    	$product=new Product;

    	$smartphone=new Smartphone;
    	$smartphone->productid=$product->add($productName,$quantity,$purchase,$price,$discountPercent,$productType,$weight,$madein,$status,$imagesurl,$gift,$description);
    	$smartphone->smartdeviceid=$smartdevice->add($firstcamera,$second,$chipset,$gpu,$ram,$connections,$memory,$battery,$design,$utility,$screen);
        $smartphone->sim=$sim;
    	$smartphone->save();
    }

    public function edit($id,$productName,$quantity,$purchase,$price,$discountPercent,$productType,$weight,$madein,$status,$imagesurl,$gift,$firstcamera,$second,$chipset,$gpu,$ram,$connections,$memory,$battery,$design,$utility,$screen,$sim,$description,$isLogoNew)
    {
        $smartdevice=new Smartdevice;
        $product=new Product;

        $smartphone=Smartphone::find($id);
        $product->edit($smartphone->productid,$productName,$quantity,$purchase,$price,$discountPercent,$productType,$weight,$madein,$status,$imagesurl,$gift,$description,$isLogoNew);
        $smartdevice->edit($smartphone->smartdeviceid,$firstcamera,$second,$chipset,$gpu,$ram,$connections,$memory,$battery,$design,$utility,$screen);
        $smartphone->sim=$sim;
        $smartphone->save();
    }

    public function search($id)
    {
    	$smartphone=Smartphone::find($id);
        $product=Product::find($smartphone->productid)->toArray();
        $smartdevice=Smartdevice::find($smartphone->smartdeviceid)->toArray();
        $smartphone=$smartphone->toArray();
        return array('smartphone'=>$smartphone,'product'=>$product,'smartdevice'=>$smartdevice);
    }

    public function isProduct()
    {
        return $this->belongsTo('App\Product','productid','id');
    }

    public function doDelete($id)
    {
        $smartphone=Smartphone::find($id);
        $product=Product::find($smartphone->productid);
        $smartdevice=Smartdevice::find($smartphone->smartdeviceid);
        $smartphone->delete();
        $smartdevice->delete();
        $product->delete();
    }
}
