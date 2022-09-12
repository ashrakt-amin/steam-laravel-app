<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Home>
 */
class HomeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'wayOfLearning:en'=>$this->faker->paragraph(10),
            'wayOfLearning:ar'=>$this->faker->paragraph(10),

            'mission:en'=>$this->faker->paragraph(10),
            'mission:ar'=>$this->faker->paragraph(10),

            'whoWeAre:en'=>$this->faker->paragraph(10),
            'whoWeAre:ar'=>$this->faker->paragraph(10),

            'accomplishments:en'=>$this->faker->paragraph(10),
            'accomplishments:ar'=>$this->faker->paragraph(10),

            'vision:en'=>$this->faker->paragraph(10),
            'vision:ar'=>$this->faker->paragraph(10),
        ];
    }
    
}
