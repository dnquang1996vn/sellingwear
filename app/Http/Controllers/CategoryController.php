<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Model\Category;
use App\Model\Product;

class CategoryController extends Controller
{
    public function create(CategoryRequest $request)
    {	
    	$category = new Category;
    	$category->name = $request->name;
    	$category->save();
    	return redirect()->route('show_category');
    }

    public function show()
    {
    	$categories = Category::all();
    	return view('category_show')->with('categories', $categories);
    }

    public function delete($id)
    {
    	$category = Category::destroy($id);
    	return redirect()->route('show_category');
    }

    public function view($id)
    {
        $categories = Category::all();
        $products = Product::orderBy('id','asc')->where('category_id', $id)->get();
        return view('product_list')->with('products', $products)->with('categories', $categories);
    }
}
