<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VendorBankAccount extends Model
{
    protected $fillable = ['vendor_id', 'bank_account_id'];
    public $timestamps = false;
}
