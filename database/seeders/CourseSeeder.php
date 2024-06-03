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
        Courses::factory()->create([
            'name' => 'Fathur',

            'description' => 'kelas yang sangat sulit',
            'credits' => 2,
            'instructure' => 'mr fahri'
        ]);
        Courses::factory()->create([
            'name' => 'Fathur rizqi',

            'description' => 'kelas yang sangat sulitt bangetett',
            'credits' => 3,
            'instructure' => 'mr fahri yaman'
        ]);
    }
}
