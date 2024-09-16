<?php

namespace Database\Factories;

use App\Models\Trick;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transition>
 */
class TransitionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->optional()->word,
            'start_trick_id' => Trick::inRandomOrder()->first()->id,
            'end_trick_id' => Trick::inRandomOrder()->first()->id,
            'description' => $this->faker->optional()->paragraph,
            'learned_at' => $this->faker->optional()->date,
            'is_mastered' => $this->faker->boolean,
            'difficulty' => $this->faker->randomElement(['easy', 'medium', 'hard', 'expert']),
            'energy_cost' => $this->faker->randomElement(['low', 'medium', 'high']),
            'video_url' => $this->faker->optional()->url,
        ];
    }
}
