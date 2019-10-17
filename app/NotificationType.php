<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NotificationType extends Model
{
    protected $fillable = ['name'];
    public $timestamps = false;
}
