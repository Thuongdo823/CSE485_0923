<?php

namespace Database\Seeders;

use App\Models\Artwork;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtworksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("artworks")->delete();
        $faker = Faker::create();
        for ($i = 0; $i < 30; $i++) {
            Artwork::create([
                'artist_name'=>$faker->name,
                'description'=> $faker->sentence(2,true),
                'art_type'=>$faker->randomElement(['Hội họa', 'Âm nhạc','Văn học']),
                'media_link'=>$faker->url(),
                'cover_image'=>$faker->url(),
            ]);
        }
    }
}
