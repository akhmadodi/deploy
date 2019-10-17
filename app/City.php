<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = ['name', 'province_id'];
    public $timestamps = false;

    public function province()
    {
        return $this->belongsTo('App\Province');
    }

    public function areas()
    {
        return $this->hasMany('App\Area');
    }
}
