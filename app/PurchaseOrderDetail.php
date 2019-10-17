<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchaseOrderDetail extends Model
{
    protected $fillable = [
        'purchase_order_id',
        'product_id',
        'vendor_id',
        'qty',
        'price',
        'total_price',
        'cashback',
        'discount',
        'sub_total'
    ];
    public $timestamps = false;
}
