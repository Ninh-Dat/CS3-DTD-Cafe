<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'amount' => rand(1,10),
            'order_id'=> Order::all()->random()->id,
            'product_id'=> Product::all()->random()->id,
        ];
    }
}
