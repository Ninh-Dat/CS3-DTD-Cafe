<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'title'=>$this->faker->title,
            'price'=>rand(100,1000),
            'img'=>$this->faker->text,
            'description'=>$this->faker->text,
            'category_id'=>Category::all()->random()->id,
        ];
    }
}
