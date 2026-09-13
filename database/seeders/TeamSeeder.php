<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (Team::count() > 0) {
            return;
        }

        Team::factory()->createMany([
            ['name' => 'Project manager'],
            ['name' => 'Development'],
            ['name' => 'Design'],
        ]);
    }
}
