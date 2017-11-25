<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function images()
    {
        return $this->hasMany('App\Model\Image');
    }

    public function category()
    {
        return $this->belongsTo('App\Model\Category');
    }

    public static function store($params, $imageName)
    {
        $product = new Product();
        // save here
        $product->name = $params['name'];
        $product->category_id = $params['category'];
        $product->label = $params['label'];
        $product->price = $params['price'];
        $product->description = $params['description'];
        $product->detail_information = $params['information'];
        $product->feature_image = 'image/product_image/'.$imageName;
        $product->save();
        
        return $product;
    }

    public static function updatesave($params, $imageName, $id)
    {
        $product = Product::find($id);
        // save here
        $product->name = $params['name'];
        $product->category_id = $params['category'];
        $product->label = $params['label'];
        $product->price = $params['price'];
        $product->description = $params['description'];
        $product->detail_information = $params['information'];
        $product->feature_image = 'image/product_image/'.$imageName;
        $product->save();
        return $product;
    }
}
