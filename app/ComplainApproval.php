<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComplainApproval extends Model
{
    protected $fillable = ['complain_id', 'user_id'];
}
