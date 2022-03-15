<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = new Category();
        $categories->name="Cà phê";
        $categories->save();

        $categories = new Category();
        $categories->name="Trà";
        $categories->save();

        $categories = new Category();
        $categories->name="Bánh";
        $categories->save();

        $categories = new Category();
        $categories->name="Dá bào";
        $categories->save();
    }
}
