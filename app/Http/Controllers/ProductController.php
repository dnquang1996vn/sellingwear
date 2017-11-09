<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\User;
use App\Model\Product;
use Auth;
use Validator;

class ProductController extends Controller
{
    public function list()
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
        $messages = [
        ];
        $validator = Validator::make($request->all(), [
            'name'     => 'required|max:255',
            'label'     => 'required|max:255',
            'price'     => 'required',
            'description'     => 'required|max:255',
            'information'    => 'required',
        ], $messages);
        if ($validator->fails()) {
            return redirect()->route('create_product')
                    ->withErrors($validator)
                    ->withInput();
        } else {
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
            return redirect()->route('manage_product');
        }
        
    }

    public function show($id)
    {
        $product = Product::find($id);
        return view('product_view')->with('product', $product);
    }
}
