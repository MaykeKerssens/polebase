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
        Trick::factory()
            ->create([
                'name' => 'Body spiral reverse grab attitude',
                'is_mastered' => true,
            ]);

        Trick::factory()
            ->create([
                'name' => 'Handspring twisted grip',
                'description' => 'Handspring twisted grip is a pole trick that requires a lot of strength and flexibility. It is an advanced trick that is often performed by professional pole dancers.',
                'learned_at' => '2021-01-01',
                'is_mastered' => true,
                'difficulty' => 'hard',
                'energy_cost' => 'high',
            ]);

        Trick::factory()
            ->create([
                'name' => 'Handspring cup grip',
                'description' => 'Handspring cup grip is a pole trick that requires a lot of strength and flexibility. It is an advanced trick that is often performed by professional pole dancers.',
                'learned_at' => '2021-01-01',
                'is_mastered' => false,
                'difficulty' => 'hard',
                'energy_cost' => 'high',
            ]);

        Trick::factory()
            ->create([
                'name' => 'Handspring elbow grip',
                'description' => 'Handspring elbow grip is a pole trick that requires a lot of strength and flexibility. It is an advanced trick that is often performed by professional pole dancers.',
                'learned_at' => '2021-01-01',
                'is_mastered' => false,
                'difficulty' => 'expert',
                'energy_cost' => 'high',
            ]);

        Trick::factory()
            ->count(20)
            ->create();
    }
}
