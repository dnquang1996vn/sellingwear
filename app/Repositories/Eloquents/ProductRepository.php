<?php
namespace App\Repositories\Eloquents;

use App\Repositories\Contracts\ProductRepositoryInterface;
use App\Model\Product;
use App\Model\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ProductRepository implements ProductRepositoryInterface
{
    public function all()
    {
        return Product::all();
    }

    public function find($id)
    {
        return Product::find($id);
    }

    public function list()
    {
        return Product::orderBy('id','asc')->get();
    }

    public function list_newest_product(){
        return Product::orderBy('id','asc')->take(8)->get();
    }

    public function listByCategory($id)
    {
        return Product::orderBy('id','asc')->where('category_id', $id)->get();
    }

    public function store($params)
    {
        $product = new Product();
        $product->name = $params['name'];
        $product->category_id = $params['category'];
        $product->label = $params['label'];
        $product->price = $params['price'];
        $product->description = $params['description'];
        $product->detail_information = $params['information'];
        $product->feature_image = $this->updateImage($params['feature_image_input']);
        $product->save();
        return $product;
    }

    public function sort_product ($type, $kind_id = null)
    {   
        if ($kind_id == null) {
            $product = $this->list();
        } else {
            $product = $this->listByCategory($kind_id);
        }
        switch ($type) {
            case '1':
                return $product->sortByDesc('created_at');
                break;
            case '2':
                return $product->sortBy('created_at');
                break;
            case '3':
                return $product->sortBy('price');
                break;
            case '4':
                return $product->sortByDesc('price');
                break;
            default:
                return $product;
                break;
        }
    }

    public function update($params, $id)
    {
        $product = Product::find($id);
        $product->name = $params['name'];
        $product->category_id = $params['category'];
        $product->label = $params['label'];
        $product->price = $params['price'];
        $product->description = $params['description'];
        $product->detail_information = $params['information'];
        if (isset($params['feature_image_input'])) {
            Storage::delete($product->feature_image);
            $product->feature_image = $this->updateImage($params['feature_image_input']);
        }
        $product->save();
        return $product;
    }

    public function search($params)
    {
        return Product::where('name', 'LIKE', $params['q'])->get();
    }

    public function updateImage($image)
    {
        $path = Storage::putFileAs('feature_image', $image, time());
        return $path;
    }
}