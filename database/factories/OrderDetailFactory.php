<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderDetail>
 */
class OrderDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'product_id' => $this->faker->numberBetween(1,7),
            'order_id' => $this->faker->numberBetween(1,5),
            'subTotal' => $this->faker->numberBetween(100,999),
            'quantity' => $this->faker->numberBetween(1,9)
        ];
    }
}
