<?php

namespace App\Repositories;

use App\Models\Product;
use http\Env\Request;

class ProductRepository extends BaseRepository
{
    public function getModel()
    {
        return Product::class;
    }

    public function store($request)
    {
        $fileName = time() . '_' . $request->file('img')->getClientOriginalName();
        $path = $request->file('img')->storeAs("images", $fileName, "public");
//        $data["img"] = $path;
        $product = new Product();
        $product->name = $request->name;
        $product->title = $request->title;
        $product->img = $path;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $product->save();
    }

    public function update($request, $id)

    {
        if($request->hasFile('img')){
            $fileName = time() . '_' . $request->file('img')->getClientOriginalName();
            $path = $request->file('img')->storeAs("images", $fileName, "public");
        }
        $product = Product::find($id);
        $product->name = $request->name;
        $product->title = $request->title;
        $product->img = $path ?? $product->img;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $product->save();
    }
}

