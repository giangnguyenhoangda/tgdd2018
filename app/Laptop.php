<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laptop extends Model
{
    protected $table='laptop';
    public $timestamps=false;
    protected $primaryKey='id';
}
