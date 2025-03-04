<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
use App\Models\Brand;

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
            'name' => fake()->text(20),
            'description' => fake()->text(100),
            'brand_id' => fake()->randomElement(Brand::pluck('id')),
            'price' => fake()->numberBetween(0, 2500),
            'height' => fake()->numberBetween(0, 20),
            'width' => fake()->numberBetween(0, 20),
            'weight' => fake()->numberBetween(0, 20),
            'category_id' => fake()->randomElement(Category::pluck('id'))
        ];
    }
}
