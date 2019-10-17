<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'password',
        'uid',
        'role_id',
        'activated'
    ];
    protected $casts = [
        'activated'   => 'boolean'
    ];
    protected $hidden = [
        'password',
        'remember_token'
    ];

    public function role()
    {
        return $this->belongsTo('App\Role');
    }
}
