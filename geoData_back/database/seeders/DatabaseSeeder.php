<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Country;
use App\Models\City;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \Faker\Factory::create()->unique(true);

        Country::factory(5)->create();
        City::factory(20)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
