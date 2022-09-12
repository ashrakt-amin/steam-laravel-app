<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CourseObjective>
 */
class CourseObjectiveFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'objective:en'=>$this->faker->paragraph(),
            'objective:ar'=>$this->faker->paragraph(),
            'course_id'=>rand(1,5),
        ];
    }
}
