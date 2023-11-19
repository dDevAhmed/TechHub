<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TheResourceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'resource_id' => fake()->unique()->randomNumber(6, true),
            'title' => fake()->sentence(),
            'tags' => 'HTML/CSS, SQL, PHP',
            'description' => fake()->paragraph(50),
            'post_by' => fake()->randomNumber(6, true),
        ];
    }
}
