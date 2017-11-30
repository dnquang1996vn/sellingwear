<?php
namespace App\Repositories\Eloquents;

use App\Model\Product;
use App\Model\Cart;
use App\Model\User;

class CartRepository
{
    public function store($params)
    {
        $category = new Category;
        $category->name = $params['name'];
        $category->save();
    }
}