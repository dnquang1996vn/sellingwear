<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\ProductRepositoryInterface;
use App\Model\Product;
use App\Model\User;
use App\Model\Category;
use Auth;
use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    protected $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function list()
    {  
        $categories = Category::all();
        $products = $this->productRepository->list();
        return view('product.product_list')
            ->with(['products'   => $products, 'categories' => $categories]);
    }

    public function create($id=null)
    {   
        $categories = Category::all();
        $product = $this->productRepository->find($id);
        return view('product.product_create')->with('product', $product)->with('categories', $categories);
    }

    public function store(CreateProductRequest $request)
    {
        $image = $request->file('feature_image_input');
        $imageName = time().$image->getClientOriginalName();
        $image->move(public_path('image/product_image'),$imageName);
        $product = Product::store($request->all(), $imageName);
        return redirect()->route('manage_product');
    }

    public function update(UpdateProductRequest $request, $id)
    {
        $image = $request->file('feature_image_input');
        $imageName = time().$image->getClientOriginalName();
        $image->move(public_path('image/product_image'),$imageName);
        $product = Product::updatesave($request->all(), $imageName, $id);
        return redirect()->route('manage_product');
    }

    public function show($id)
    {
        $product = Product::find($id);
        return view('product.product_view')->with('product', $product);
    }

    public function delete($id)
    {
        $product = Product::destroy($id);
        return redirect()->route('manage_product');
    }
}
