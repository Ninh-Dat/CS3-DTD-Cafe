<?php

namespace App\Repositories;

use Illuminate\Pagination\Paginator;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class HomeRepository extends BaseRepository
{


    public function categoriesHome()
    {
      $categoriesHome = DB::table('categories')->get();
      return $categoriesHome;
    }

    public function productsHome()
    {
        $productsHome = DB::table('products')->simplePaginate(6);
        return $productsHome;
    }


    public function getModel()
    {
        // TODO: Implement getModel() method.
    }
}
