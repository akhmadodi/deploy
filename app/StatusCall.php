<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusCall extends Model
{
    protected $fillable = ['name'];
    public $timestamps = false;
}
