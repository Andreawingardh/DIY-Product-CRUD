<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $categories = [

            'Screw', 'Materials', 'Tools', 'Paint', 'Hobbies'
        ];

        return [
            'name' => fake()->unique()->randomElement($categories)
        ];
    }
}
