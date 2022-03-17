<?php

namespace Database\Factories;

use App\Models\Status;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'order_date' => $this->faker->date,
            'note' => $this->faker->text,
            'user_id' => User::all()->random()->id,
            'status_id' => Status::all()->random()->id
        ];
    }
}
