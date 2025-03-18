<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

// Import the seeders
use Database\Seeders\UserTableSeeder;
use Database\Seeders\SectionsTableSeeder;
use Database\Seeders\BeerTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Call other seeders
        $this->call([
            UserTableSeeder::class,
            SectionsTableSeeder::class,
            BeerTableSeeder::class,
        ]);
    }
}
