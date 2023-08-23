<?php

namespace Database\Seeders;

use App\Models\ProjectEleve;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectEleveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProjectEleve::insert([
            [
                "project_id" => 1,
                "eleve_id" => 2,
            ],
            [
                "project_id" => 2,
                "eleve_id" => 4,
            ],
            [
                "project_id" => 3,
                "eleve_id" => 3,
            ],
            [
                "project_id" => 3,
                "eleve_id" => 1,
            ],
            [
                "project_id" => 1,
                "eleve_id" => 3,
            ],
            [
                "project_id" => 1,
                "eleve_id" => 1,
            ],
        ]);
    }
}
