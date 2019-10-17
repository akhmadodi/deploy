<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SalesCall extends Model
{
    protected $fillable = ['uid', 'status_call_id', 'note', 'user_id'];
}
