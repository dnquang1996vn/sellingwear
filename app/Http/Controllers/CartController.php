<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Category;
use App\Model\Product;
use App\Model\Cart;
use Auth;
use App\Repositories\Eloquents\CartRepository;

class CartController extends Controller
{
    protected $cartRepository;

    public function __construct(CartRepository $cartRepository)
    {
        $this->cartRepository = $cartRepository;
    }

    public function add(Request $request)
    {
    	$cart = $this->cartRepository->add($request->all());
    	return redirect()->route('view_product', $request->product_id);
    }

    public function show()
    {
    	$carts = $this->cartRepository->show();
    	return view('cart.showcart')->with('carts', $carts);
    }

    public function order($id)
    {
    	return view('cart.order2')->with('cart_id', $id);
    }

    public function destroy($id)
    {
        Cart::destroy($id);
        return redirect()->route('show_cart');
    }

    public function change_address(Request $request)
    {   
        $user = $this->cartRepository->change_address($request->all());
        $cart_id = $request->cart_id;
        return redirect()->route('order_cart', $cart_id);
    }
}
