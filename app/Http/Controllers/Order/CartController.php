<?php
/**
 * Created by IntelliJ IDEA.
 * User: dungda_pc
 * Date: 26/11/2017
 * Time: 16:45
 */

namespace App\Http\Controllers\Order;
use App\Repositories\Eloquents\ProductRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Model\User;
use App\Model\Product;
use App\Model\Category;
use Auth;
use Validator;
use App\Http\Requests\CreateProductRequest;


class CartController
{
    var $product_id_list = array();
    var $product_list = array();
    var $productRep;

    public function __construct()
    {
        $this->productRep = new ProductRepository();
    }


    public function addToCart($product_id){
        array_push($this->product_list, $product_id);
        $product = $this->productRep->find($product_id);
        array_push($this->product_list, $product);
    }

    public function showCart(){
        return view('product.product_list')->with(['products' => $this->product_list, 'categories' => array()]);
    }
}