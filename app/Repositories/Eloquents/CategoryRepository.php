<?php
namespace App\Repositories\Eloquents;

use App\Repositories\Contracts\CategoryRepositoryInterface;
use App\Model\Product;
use App\Model\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class CategoryRepository
{
    public function store($params)
    {
        $category = new Category;
        $category->name = $params['name'];
        $category->save();
    }
}