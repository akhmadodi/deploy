<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $fillable = [
        'uid',
        'name',
        'phone',
        'email',
        'country_id',
        'province_id',
        'city_id',
        'area_id',
        'address',
        'user_id'
    ];
}
