<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shoe>
 */
class ShoeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'brand' => fake()->randomElement(['nike', 'adidas', 'jordan']),
            'size' => rand(36,48),
            'price' => rand(50,100) . '000'
        ];
    }
}
