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
            'name' => fake()->name,
            'description' => fake()->paragraph,
            'credits' => fake()->randomElement([2,3]),  
            'instructure' => fake()->name(),
        ];
    }
}
