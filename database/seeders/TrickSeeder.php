<?php

namespace Database\Seeders;

use App\Models\Trick;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrickSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Trick::factory()
        ->count(20)
        ->create();

        // Create a trick with a specific name
        Trick::factory()->create([
            'name' => 'Handspring twisted grip',
            'nickname' => 'Handspring TG',
            'description' => 'Handspring twisted grip is a pole trick that requires a lot of strength and flexibility. It is an advanced trick that is often performed by professional pole dancers.',
            'learned_at' => '2021-01-01',
            'is_mastered' => true,
            'difficulty' => 'hard',
            'energy_cost' => 'high',
            'image_url' => 'https://example.com/handspring-twisted-grip.jpg',
            'video_url' => 'https://example.com/handspring-twisted-grip.mp4',
        ]);

        Trick::factory()->create([
            'name' => 'Handspring cup grip',
            'nickname' => 'Handspring CG',
            'description' => 'Handspring cup grip is a pole trick that requires a lot of strength and flexibility. It is an advanced trick that is often performed by professional pole dancers.',
            'learned_at' => '2021-01-01',
            'is_mastered' => false,
            'difficulty' => 'hard',
            'energy_cost' => 'high',
            'image_url' => 'https://example.com/handspring-cup-grip.jpg',
            'video_url' => 'https://example.com/handspring-cup-grip.mp4',
        ]);

        Trick::factory()->create([
            'name' => 'Handspring elbow grip',
            'nickname' => 'Handspring EG',
            'description' => 'Handspring elbow grip is a pole trick that requires a lot of strength and flexibility. It is an advanced trick that is often performed by professional pole dancers.',
            'learned_at' => '2021-01-01',
            'is_mastered' => false,
            'difficulty' => 'expert',
            'energy_cost' => 'high',
            'image_url' => 'https://example.com/handspring-elbow-grip.jpg',
            'video_url' => 'https://example.com/handspring-elbow-grip.mp4',
        ]);
    }
}
