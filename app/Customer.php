<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'customer_category_id',
        'name',
        'is_vip',
        'phone',
        'email',
        'uid',
        'country_id',
        'province_id',
        'city_id',
        'area_id',
        'address',
        'last_order',
        'user_id'
    ];
    protected $casts = [
        'is_vip'   => 'boolean'
    ];

    public function pics()
    {
        return $this->hasMany('App\CustomerPic');
    }

    public function category()
    {
        return $this->belongsTo('App\CustomerCategory', 'customer_category_id');
    }

    public function country()
    {
        return $this->belongsTo('App\Country', 'country_id');
    }

    public function province()
    {
        return $this->belongsTo('App\Province', 'province_id');
    }

    public function city()
    {
        return $this->belongsTo('App\City', 'city_id');
    }

    public function area()
    {
        return $this->belongsTo('App\Area', 'area_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public static function boot() {
        parent::boot();

        static::deleting(function($customer) {
             $customer->pics()->delete();
        });
    }
}
