<?php

namespace Database\Seeders;

use App\Models\Collection;
use App\Models\Game;
use App\Models\Review;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        Game::factory(50)->create();

        Collection::factory(50)->create();

        Review::factory(50)->create();

        $this->call([
            GameCollectionSeeder::class,
        ]);
    }
}
