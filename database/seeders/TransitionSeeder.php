<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\Transition;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Transition::factory()->create([
            'name' => 'Phoenix',
            'start_trick_id' => 1,
            'end_trick_id' => 2,
            'is_mastered' => false,
            'difficulty' => 'expert',
            'energy_cost' => 'high',
        ]);

        Transition::factory()
            ->count(5)
            ->create()
            ->each(function ($trick) {
                // Randomly decide whether to attach tags to each transition
                if (rand(0, 1)) {
                    $tags = Tag::inRandomOrder()->take(rand(1, 10))->pluck('id');
                    $trick->tags()->attach($tags);
                }
            });
    }
}
