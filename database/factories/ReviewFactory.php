<?php

namespace Database\Factories;

use App\Models\Review;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    protected $model = Review::class;

    public function definition()
    {
        return [
            'rating' => $this->faker->numberBetween(1, 10),
            'comment' => $this->faker->paragraph,
            'user_id' => \App\Models\User::factory(),
            'game_id' => \App\Models\Game::factory(),
        ];
    }
}
