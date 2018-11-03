<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Smartphone extends Model
{
    protected $table='smartphone';
    public $timestamps=false;
    protected $primaryKey='id';
}
