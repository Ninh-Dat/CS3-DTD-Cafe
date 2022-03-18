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
        $categories->description="Cà phê ngon";
        $categories->save();

        $categories = new Category();
        $categories->name="Trà";
        $categories->description="Trà thái nguyên xanh";
        $categories->save();

        $categories = new Category();
        $categories->name="Bánh";
        $categories->description="Bánh ngon";
        $categories->save();

        $categories = new Category();
        $categories->name="Đá bào";
        $categories->description="Đá bào mát lạnh";
        $categories->save();
    }
}
