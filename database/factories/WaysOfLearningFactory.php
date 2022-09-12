<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\WaysOfLearning>
 */
class WaysOfLearningFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'way:en'=>$this->faker->sentence(1),
            'way:ar'=>$this->faker->sentence(1),
        ];
    }
}
