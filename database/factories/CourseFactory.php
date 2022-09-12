<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title:en' =>$this->faker->text(10),
            'title:ar' =>$this->faker->text(10),
            'levels' =>$this->faker->randomDigit(),
            'order'  =>$this->faker->randomDigit(),
            'view'  =>$this->faker->randomElement(['true' ,'false']),
            'duration'  =>$this->faker->randomDigit(),
            'image' =>$this->faker->numberBetween(1,5).".png"

            // image(storage_path('Images'),100,100,null,false,true),

        ];
    }
}