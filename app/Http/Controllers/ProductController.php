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

class ProductController extends Controller
{
    protected $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function list()
    {  
        $products = $this->productRepository->list();
        return view('product.product_list')
            ->with(['products'   => $products]);
    }

    public function listByCategory($id)
    {
        $kind = Category::find($id);
        $products = $this->productRepository->listByCategory($id);
        return view('product.product_by_category')
            ->with(['products'   => $products,
                    'kind'   => $kind]);
    }

    public function sortProduct($type)
    {
        $products = $this->productRepository->sort_product($type);
        return view('product.product_list')
            ->with(['products'   => $products]);
    }

    public function create($id=null)
    {   
        $product = $this->productRepository->find($id);
        return view('product.product_create')->with('product', $product);
    }

    public function store(CreateProductRequest $request)
    {
        $product = $this->productRepository->store($request->all());
        return redirect()->route('view_product', $product->id);
    }

    public function update(UpdateProductRequest $request, $id)
    {
        $product = $this->productRepository->update($request->all(), $id);
        return redirect()->route('view_product', $product->id);
    }

    public function show($id)
    {
        $product = Product::find($id);
        return view('product.product_view')->with('product', $product);
    }

    public function delete($id)
    {
        $product = Product::destroy($id);
        return redirect()->route('home');
    }

    public function search(Request $request)
    {   
        $products = $this->productRepository->search($request->all());
        $key = $request->q;
        return view('product.product_search')->with(['products' => $products,
                                                    'key' => $key]);
    }
}
