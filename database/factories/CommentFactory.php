<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    protected $model = Comment::class;

    public function definition()
    {
        $postIds = Post::pluck('id')->toArray();

        return [
            'body' => $this->faker->paragraph,
            'user_id' => User::factory()->create()->id,
            'post_id' => $this->faker->randomElement($postIds),
        ];
    }
}
