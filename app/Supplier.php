<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    //
    protected $table = 'supplr_master';
    protected $primaryKey = 'SUPPLIER';
    public $timestamps = false;
}
