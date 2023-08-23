<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::insert([
            [
                "name" => "coding school",
                "desc" => fake()->sentence(15),
            ],
            [
                "name" => "marketing school",
                "desc" => fake()->sentence(15),
            ],
            [
                "name" => "content creator",
                "desc" => fake()->sentence(15),
            ],
        ]);
    }
}
