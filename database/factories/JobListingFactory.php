<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class JobListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'job_id' => fake()->unique()->randomNumber(6, true),
            'title' => fake()->sentence(),
            'tags' => 'HTML/CSS, SQL, PHP',
            'company' => fake()->company(),
            'location' => fake()->city(),
            'type' => fake()->randomElement(['Full time', 'Part Time', 'Contract', 'Internship']),
            'level' => fake()->randomElement(['No Experience', 'Internship and Graduate', 'Entry Level', 'Mid Level', 'Senior Level', 'Executive']),
            'email' => fake()->companyEmail(),
            'website' => fake()->url(),
            'description' => fake()->paragraph(500),
            'post_by' => fake()->randomNumber(6, true),
            'is_active'=> fake()->boolean(),
            // 'email_verified_at' => now(),
        ];
    }
}
