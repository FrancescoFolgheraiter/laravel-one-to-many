<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Models
use App\Models\Project;

// Helpers per slug
use Illuminate\Support\Str;
//importazione carbon
use Carbon\Carbon;
class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::truncate();
        for ($i = 0; $i < 10; $i++) {

            $name = fake()->sentence();
            $slug = Str::slug($name);
            $project = Project::create([
                'name' => $name,
                'slug' => $slug,
                'description' => fake()->paragraph(),
                'technologies'=> fake()->word(),
                'start_date'=>Carbon::now(),
                'last_update_date'=>Carbon::now(),
                'total_hours'=> fake()->randomFloat(1,0.5,100)
            ]);
        }
    }
}
