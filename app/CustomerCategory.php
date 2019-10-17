<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerCategory extends Model
{
    protected $fillable = ['name'];
    public $timestamps = false;
}
