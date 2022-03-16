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
        $category->save();

    }

//    public function update($id,$request)
//    {
//        $category = new Category();
//        $category->id = $id;
//        $category->name = $request->name;
//        $category->save();
//    }

}
