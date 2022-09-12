<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $courses =\App\Models\Course::factory(6)->create();
                  \App\Models\Language::factory(2)->create();
                  \App\Models\CourseContent::factory(20)->create();
                  \App\Models\CourseObjective::factory(20)->create();
                  \App\Models\Team::factory(6)->create();
                  \App\Models\Contact::factory(3)->create();
                  \App\Models\Home::factory(1)->create();
                  \App\Models\WaysOfLearning::factory(3)->create();
                  \App\Models\Gallery::factory(6)->create();






        foreach($courses as $course)
        { 
         $course->languages()->attach(['language_id'=>rand(1,2)]);
        }

        $this->call([UserSeeder::class]);
        



    }
}
