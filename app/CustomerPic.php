<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerPic extends Model
{
    protected $fillable = ['customer_id', 'pic_id'];
    public $timestamps = false;

    public function pic_info()
    {
        return $this->belongsTo('App\Pic', 'pic_id');
    }

    public static function boot() {
        parent::boot();

        static::deleting(function($customer_pic) {
             $customer_pic->pic_info()->delete();
        });
    }
}
