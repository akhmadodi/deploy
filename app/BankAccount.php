<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BankAccount extends Model
{
    protected $fillable = ['id', 'name', 'bank', 'account'];
    public $timestamps = false;
}
