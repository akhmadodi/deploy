<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComplainType extends Model
{
    protected $fillable = ['name'];
    public $timestamps = false;
}
