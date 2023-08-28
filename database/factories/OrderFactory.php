<?php

namespace Database\Factories;

use App\Models\Plan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'plan_id' => fake()->randomElement(Plan::pluck('id')),
            'name' => fake()->name(),
            'email' => fake()->email(),
            'phone' => fake()->numerify('###########'),
        ];
    }
}
