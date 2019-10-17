<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complain extends Model
{
    protected $fillable = [
        'uid',
        'complain_type_id',
        'purchase_order_id',
        'customer_id',
        'pic_id',
        'description',
        'status',
        'solution',
        'user_id'
    ];
}
