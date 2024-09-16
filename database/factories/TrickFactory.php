<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trick>
 */
class TrickFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'nickname' => $this->faker->optional()->word,
            'description' => $this->faker->optional()->paragraph,
            'learned_at' => $this->faker->optional()->date,
            'is_mastered' => $this->faker->boolean,
            'difficulty' => $this->faker->randomElement(['easy', 'medium', 'hard', 'expert']),
            'energy_cost' => $this->faker->randomElement(['low', 'medium', 'high']),
            'image_url' => $this->faker->optional()->imageUrl,
            'video_url' => $this->faker->optional()->url,
        ];
    }
}
