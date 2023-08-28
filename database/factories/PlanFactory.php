<?php

namespace Database\Factories;

use App\Enums\HasEnum;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Plan>
 */
class PlanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'price' => fake()->randomFloat(0, 3),
            'wifi' => HasEnum::SIM,
            'games' => HasEnum::NAO,
            'movies' => HasEnum::NAO,
            'speed' => fake()->randomFloat(0, 3),
            'giga' => HasEnum::NAO,
            'best' => HasEnum::NAO,
        ];
    }
}
