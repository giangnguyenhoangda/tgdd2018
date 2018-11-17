<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table='comment';
    public $timestamps=false;
    protected $primaryKey='id';

    public function add($name,$email,$phone,$content)
    {
    	$this->name=$name;
    	$this->email=$email;
    	$this->phone=$phone;
    	$this->content=$content;
    	$this->save();
    	return $this->id;
    }
}
