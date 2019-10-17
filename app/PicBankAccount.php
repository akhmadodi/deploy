<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PicBankAccount extends Model
{
    protected $fillable = ['pic_id', 'bank_account_id'];
    public $timestamps = false;

    public function bank_account_info()
    {
        return $this->belongsTo('App\BankAccount', 'bank_account_id');
    }
}
