<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserTarget extends Model
{
    protected $fillable = [
        'period',
        'target',
        'user_id'
    ];
}
