<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Category;
use App\Model\Product;
use App\Model\Cart;
use App\Repositories\Eloquents\CartRepository;

class CartController extends Controller
{
    protected $cartRepository;

    public function __construct(CartRepository $cartRepository)
    {
        $this->cartRepository = $cartRepository;
    }
}
