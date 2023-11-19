<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CommunityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'community_id' => fake()->unique()->randomNumber(6, true),
            'title' => fake()->sentence(),
            'tags' => 'Frontend, Backend, PHP',
            'description' => fake()->paragraph(50),
            'created_by' => fake()->randomNumber(6, true),
        ];
    }
}
