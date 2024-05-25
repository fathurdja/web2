<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\courses;
use Illuminate\Database\Eloquent\Factories\Factory;

class CoursesFactory extends Factory
{
    protected $model = courses::class;

    public function definition()
    {
        return [
            'name' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph,
            'credits' => $this->faker->randomFloat(2, 1000, 1000000),  // price in Rupiah
            'instructure' => $this->faker->name,
        ];
    }
}
