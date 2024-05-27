<?php

namespace Database\Seeders;

use App\Models\Advert;
use App\Models\Image;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        Advert::factory(250)->create()
            ->each(function ($advert) {
                DB::table('images')->insert([
                    'advert_id' => $advert->id,
                    'link' => URL::to('/').'/no_image.png',
                    'created_at' => fake()->dateTime()->format('d-m-Y H:i:s'),
                    'updated_at' => fake()->dateTime()->format('d-m-Y H:i:s'),
                ]);
                DB::table('images')->insert([
                    'advert_id' => $advert->id,
                    'link' => URL::to('/').'/no_image1.png',
                    'created_at' => fake()->dateTime()->format('d-m-Y H:i:s'),
                    'updated_at' => fake()->dateTime()->format('d-m-Y H:i:s'),
                ]);
                DB::table('images')->insert([
                    'advert_id' => $advert->id,
                    'link' => URL::to('/').'/no_image2.png',
                    'created_at' => fake()->dateTime()->format('d-m-Y H:i:s'),
                    'updated_at' => fake()->dateTime()->format('d-m-Y H:i:s'),
                ]);
            });

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
