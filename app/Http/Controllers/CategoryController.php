<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Model\Category;
use App\Model\Product;
use App\Repositories\Eloquents\CategoryRepository;

class CategoryController extends Controller
{
    protected $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function create(CategoryRequest $request)
    {   
        $this->categoryRepository->store($request->all());
        return redirect()->route('show_category');
    }

    public function show()
    {
        $categories = Category::all();
        return view('category.category_show')->with('categories', $categories);
    }

    public function delete($id)
    {
        $category = Category::destroy($id);
        return redirect()->route('show_category');
    }
}
