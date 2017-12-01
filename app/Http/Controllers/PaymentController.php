<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Cart;

class PaymentController extends Controller
{
    public function create($cart_id)
    {
    	$cart = Cart::find($cart_id);
    	return view('cart.payment')->with('cart', $cart);
    }
}
