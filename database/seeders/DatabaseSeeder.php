<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\City;
use App\Models\Country;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Country::create(['name' => 'United Kindom']);
        Country::create(['name' => 'Greece']);
        Country::create(['name' => 'Indonesia']);

        City::create(['country_id' => 1, 'name' => 'London']);
        City::create(['country_id' => 1, 'name' => 'Liverpool']);
        City::create(['country_id' => 1, 'name' => 'Leicester']);
        City::create(['country_id' => 2, 'name' => 'Athens']);
        City::create(['country_id' => 2, 'name' => 'Patra']);
        City::create(['country_id' => 2, 'name' => 'Zakynthos']);

        City::create(['country_id' => 3, 'name' => 'Jakarta']);
        City::create(['country_id' => 3, 'name' => 'Surabaya']);
        City::create(['country_id' => 3, 'name' => 'Bandung']);
        City::create(['country_id' => 3, 'name' => 'Medan']);
        City::create(['country_id' => 3, 'name' => 'Makassar']);
        City::create(['country_id' => 3, 'name' => 'Semarang']);
        City::create(['country_id' => 3, 'name' => 'Palembang']);
        City::create(['country_id' => 3, 'name' => 'Batam']);
        City::create(['country_id' => 3, 'name' => 'Pekanbaru']);
        City::create(['country_id' => 3, 'name' => 'Denpasar']);

        Tag::create(['name' => 'Jejepangan', 'slug' => 'jejepangan']);
        Tag::create(['name' => 'Tech', 'slug' => 'tech']);
        Tag::create(['name' => 'Fun', 'slug' => 'fun']);
        Tag::create(['name' => 'Offline', 'slug' => 'offline']);
        Tag::create(['name' => 'Anime', 'slug' => 'anime']);
    }
}
