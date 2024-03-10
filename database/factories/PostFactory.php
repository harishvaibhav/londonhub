<?php

namespace Database\Factories;

use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;


class PostFactory extends Factory
{
    // using the below method we can create fake posts in the DB.
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            //Generates a fake sentence
            'body' => $this->faker->paragraph(30),
            //generates fake 30 paragraphs
            'user_id' => User::factory()
        ];
    }
}
