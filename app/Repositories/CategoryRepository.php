<?php

namespace App\Repositories;

use App\Models\Category;

class CategoryRepository extends BaseRepository
{

    public function getModel()
    {
       return Category::class;
    }

    public function store($request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();

    }

    public function update($request,$id)
    {
        $category = Category::find($id);
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();
    }

}
