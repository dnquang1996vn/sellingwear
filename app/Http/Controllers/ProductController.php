<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Model\User;
use App\Model\Product;
use App\Model\Category;
use Auth;
use Validator;
use App\Http\Requests\CreateProductRequest;

class ProductController extends Controller
{
    public function list()
    {  
        $categories = Category::all();
        $products = Product::orderBy('id','asc')->get();
        return view('product_list')->with('products', $products)->with('categories', $categories);
    }

    public function create($id=null)
    {   
        $categories = Category::all();
        $product = Product::find($id);
        return view('product_create')->with('product', $product)->with('categories', $categories);
    }

    public function store(CreateProductRequest $request, $id=null)
    {
            $image = $request->file('feature_image_input');
            $imageName = time().$image->getClientOriginalName();
            $image->move(public_path('image/product_image'),$imageName);

            if ($id) {
                $product = Product::updatesave($request->all(), $imageName, $id);
            } else {
                $product = Product::store($request->all(), $imageName);
            }
           
            return redirect()->route('manage_product');
    }

    public function show($id)
    {
        $product = Product::find($id);
        return view('product_view')->with('product', $product);
    }

    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('manage_product');
    }
}
