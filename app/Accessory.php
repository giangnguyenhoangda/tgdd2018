<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accessory extends Model
{
    protected $table='accessory';
    public $timestamps=false;
    protected $primaryKey='id';
}
