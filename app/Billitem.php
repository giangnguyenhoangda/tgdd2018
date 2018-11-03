<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Billitem extends Model
{
    protected $table='billitem';
    public $timestamps=false;
    protected $primaryKey='id';
}
