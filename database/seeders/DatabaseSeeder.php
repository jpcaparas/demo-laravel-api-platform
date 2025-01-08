<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Game;
use App\Models\Collection;
use App\Models\Review;
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

        Game::factory(10)->create();

        Collection::factory(10)->create();

        Review::factory(10)->create();
    }
}
