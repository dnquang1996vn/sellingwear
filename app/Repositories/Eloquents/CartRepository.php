<?php
namespace App\Repositories\Eloquents;

use App\Model\Product;
use App\Model\Cart;
use App\Model\User;
use Auth;

class CartRepository
{
    public function add($params)
    {
        $cart = new Cart;
        $cart->user_id = $params['user_id'];
        $cart->product_id = $params['product_id'];
        $cart->save();
        return $cart;
    }

    public function show()
    {
        $carts = Cart::where('user_id', Auth::user()->id)->get();
        return $carts;
    }

    public function change_address($params)
    {
        $user = Auth::user();
        $user->name = $params['name'];
        $user->adress = $params['adress'];
        $user->phone = $params['phone'];
        $user->save();
        return $user;
    }
}