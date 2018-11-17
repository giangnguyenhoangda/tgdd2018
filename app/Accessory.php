<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Accessory extends Model
{
    protected $table='accessory';
    public $timestamps=false;
    protected $primaryKey='id';

    public function add($productName,$quantity,$purchase,$price,$discountPercent,$productType,$weight,$madein,$status,$imagesurl,$gift,$description)
    {

    	$product=new Product;

    	$accessory=new Accessory;
    	$accessory->productid=$product->add($productName,$quantity,$purchase,$price,$discountPercent,$productType,$weight,$madein,$status,$imagesurl,$gift,$description);
    	$accessory->save();
    }

    public function edit($id,$productName,$quantity,$purchase,$price,$discountPercent,$productType,$weight,$madein,$status,$imagesurl,$gift,$description,$isLogoNew)
    {
        
        $product=new Product;

        $accessory=Accessory::find($id);
        $product->edit($accessory->productid,$productName,$quantity,$purchase,$price,$discountPercent,$productType,$weight,$madein,$status,$imagesurl,$gift,$description,$isLogoNew);
     
        $accessory->save();
    }

    public function search($id)
    {
    	$accessory=Accessory::find($id);
        $product=Product::find($accessory->productid)->toArray();
        
        $accessory=$accessory->toArray();
        return array('accessory'=>$accessory,'product'=>$product);
    }

    public function isProduct()
    {
        return $this->belongsTo('App\Product','productid','id');
    }

    public function doDelete($id)
    {
        $accessory=Accessory::find($id);
        $product=Product::find($accessory->productid);
        
        $accessory->delete();
        
        $product->delete();
    }
}
