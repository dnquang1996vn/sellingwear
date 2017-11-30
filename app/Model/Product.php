<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function carts()
    {
        return $this->hasMany('App\Model\Cart');
    }

    public function category()
    {
        return $this->belongsTo('App\Model\Category');
    }

}
