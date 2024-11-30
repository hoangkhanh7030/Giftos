<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_name' => fake()->words(3, true), // Generates a product name
            'price' => fake()->randomFloat(2, 10, 1000), // Generates a price between 10 and 1000
            'image' => fake()->imageUrl(340, 280, 'products', true), // Generates a product image URL
            'description' =>fake()->sentence(10),
        ];
    }
}
