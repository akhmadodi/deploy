<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['uid', 'name', 'product_category_id', 'price'];
}
