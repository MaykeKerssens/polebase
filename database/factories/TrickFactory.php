<?php

namespace Database\Factories;

use App\Models\Tag;
use App\Models\Trick;
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

    /**
     * Configure the factory.
     *
     * @return $this
     */
    public function configure()
    {
        return $this->afterCreating(function (Trick $trick) {
            // Randomly decide whether to attach tags to the trick
            if (rand(0, 1)) {
                $tags = Tag::inRandomOrder()->take(rand(1, 10))->pluck('id');
                $trick->tags()->attach($tags);
            }

            // Randomly create variant relationships between tricks
            if (rand(0, 1)) {
                $variantTrick = Trick::inRandomOrder()->first();
                if ($trick->id !== $variantTrick->id) {
                    $trick->variants()->attach($variantTrick->id);
                }
            }
        });
    }
}
