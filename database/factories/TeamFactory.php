<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Team>
 */
class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
           
            'name:en'=>$this->faker->sentence(1),
            'name:ar'=>$this->faker->sentence(1),
            'position:en'=>$this->faker->sentence(1),
            'position:ar'=>$this->faker->sentence(1),
            'image'=>$this->faker->numberBetween(1,2).".png",

        ];
    }
}
