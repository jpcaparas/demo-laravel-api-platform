<?php

namespace Database\Seeders;

use App\Models\Game;
use App\Models\Collection;
use Illuminate\Database\Seeder;

class GameCollectionSeeder extends Seeder
{
    public function run()
    {
        // Get all games and collections
        $games = Game::all();
        $collections = Collection::all();

        // Add 2-5 random collections to each game
        $games->each(function ($game) use ($collections) {
            $game->collections()->attach(
                $collections->random(rand(2, 5))->pluck('id')->toArray(),
                ['created_at' => now(), 'updated_at' => now()]
            );
        });
    }
}
