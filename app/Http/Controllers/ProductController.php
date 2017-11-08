<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\User;
use App\Model\Product;
use Auth;

class ProductController extends Controller
{
    public function view()
    {  
        $products = Product::orderBy('id','asc')->get();
        return view('product_list')->with('products', $products);
    }

    public function create()
    {
        return view('product_create');
    }

    public function store(Request $request)
    {
        $image = $request->file('feature_image_input');
        $imageName = time().$image->getClientOriginalName();
        $image->move(public_path('image/product_image'),$imageName);

        $product = new Product;
        $product->name = $request->name;
        $product->label = $request->label;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->detail_information = $request->information;
        $product->feature_image = 'image/product_image/'.$imageName;
        $product->save();
        return redirect()->route('product_list');
    }
}
