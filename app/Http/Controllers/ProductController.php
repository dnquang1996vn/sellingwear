<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\User;
use App\Model\Product;
use Auth;
use Validator;
use App\Http\Requests\CreateProductRequest;

class ProductController extends Controller
{
    public function list()
    {  
        $products = Product::orderBy('id','asc')->get();
        return view('product_list')->with('products', $products);
    }

    public function create($id=null)
    {   
        $product = Product::find($id);
        echo ("abc");
        return view('product_create')->with('product', $product);
    }

    public function store(CreateProductRequest $request, $id=null)
    {
            $image = $request->file('feature_image_input');
            $imageName = time().$image->getClientOriginalName();
            $image->move(public_path('image/product_image'),$imageName);

            if ($id) {
                $product = Product::find($id);
            } else {
            $product = new Product;
            }
            $product->name = $request->name;
            $product->label = $request->label;
            $product->price = $request->price;
            $product->description = $request->description;
            $product->detail_information = $request->information;
            $product->feature_image = 'image/product_image/'.$imageName;
            $product->save();
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
