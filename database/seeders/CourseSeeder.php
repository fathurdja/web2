<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\courses;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        courses::factory()->count(10)->create();
    }
}
