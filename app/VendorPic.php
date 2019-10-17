<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VendorPic extends Model
{
    protected $fillable = ['vendor_id', 'pic_id'];
    public $timestamps = false;
}
