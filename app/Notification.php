<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $fillable = [
        'notification_type_id',
        'title',
        'seen',
        'identity_id',
        'user_id'
    ];
    protected $casts = [
        'seen'   => 'boolean'
    ];
}
