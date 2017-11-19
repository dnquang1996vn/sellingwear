<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function followed_trips()
    {
        return $this->hasMany('App\Model\Image');
    }
}
