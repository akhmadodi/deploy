<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pic extends Model
{
    protected $fillable = ['name', 'phone', 'email', 'uid', 'dob'];

    public function bank_accounts()
    {
        return $this->hasMany('App\PicBankAccount');
    }
}
