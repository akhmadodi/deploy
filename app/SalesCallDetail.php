<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SalesCallDetail extends Model
{
    protected $fillable = [
        'sales_call_id',
        'customer_category_id',
        'name',
        'status',
        'phone',
        'email',
        'country_id',
        'province_id',
        'city_id',
        'area_id',
        'address'
    ];
    public $timestamps = false;
}
