<?php

namespace Database\Seeders;

use App\Models\Trick;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class TrickSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $predefinedTricks = [
            [
                'name' => 'Body spiral reverse grab attitude',
                'is_mastered' => true,
            ],
            [
                'name' => 'Handspring twisted grip',
                'description' => 'Handspring twisted grip is a pole trick that requires a lot of strength and flexibility. It is an advanced trick that is often performed by professional pole dancers.',
                'learned_at' => '2021-01-01',
                'is_mastered' => true,
                'difficulty' => 'hard',
                'energy_cost' => 'high',
            ],
            [
                'name' => 'Handspring cup grip',
                'description' => 'Handspring cup grip is a pole trick that requires a lot of strength and flexibility. It is an advanced trick that is often performed by professional pole dancers.',
                'learned_at' => '2021-01-01',
                'is_mastered' => false,
                'difficulty' => 'hard',
                'energy_cost' => 'high',
            ],
            [
                'name' => 'Handspring elbow grip',
                'description' => 'Handspring elbow grip is a pole trick that requires a lot of strength and flexibility. It is an advanced trick that is often performed by professional pole dancers.',
                'learned_at' => '2021-01-01',
                'is_mastered' => false,
                'difficulty' => 'expert',
                'energy_cost' => 'high',
            ],
        ];

        foreach ($predefinedTricks as $trickData) {
            $trick = Trick::factory()->create($trickData);

            // Randomly decide whether to attach tags to the trick
            if (rand(0, 1)) {
                $tags = Tag::inRandomOrder()->take(rand(1, 10))->pluck('id');
                $trick->tags()->attach($tags);
            }
        }

        // Create 20 additional tricks with fake data
        Trick::factory()
            ->count(20)
            ->create()
            ->each(function ($trick) {
                // Randomly decide whether to attach tags to each trick
                if (rand(0, 1)) {
                    $tags = Tag::inRandomOrder()->take(rand(1, 10))->pluck('id');
                    $trick->tags()->attach($tags);
                }
            });
    }
}
