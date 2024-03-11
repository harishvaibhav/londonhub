<?php

namespace Database\Factories;

use App\Models\Analytic;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class AnalyticFactory extends Factory
{
    protected $model = Analytic::class;

    public function definition()
    {
        return [
            'post_id' => Post::factory()->create()->id,
            'view_count' => $this->faker->numberBetween(1, 1000),
        ];
    }
}
