<?php

namespace Database\Seeders;

use App\Models\Album;
use App\Models\Artist;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Artist::factory(100)->create()->each(function ($artist) {
            Album::factory(rand(2, 5))->create([
                'artist_id' => $artist->id
            ]);
        });
    }
}
