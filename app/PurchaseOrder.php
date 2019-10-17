<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchaseOrder extends Model
{
    protected $fillable = [
        'id',
        'uid',
        'status',
        'country_id',
        'province_id',
        'city_id',
        'area_id',
        'address',
        'note',
        'greeting',
        'shipping_fee',
        'cashback',
        'discount',
        'order_at',
        'due_date',
        'produced_date',
        'delivery_at',
        'customer_id',
        'pic_id',
        'user_id'
    ];
}
