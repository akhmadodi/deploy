<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchaseOrderImage extends Model
{
    protected $fillable = ['purchase_order_id', 'url'];
    public $timestamps = false;
}
