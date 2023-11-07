<?php

namespace Database\Seeders;
use App\Models\Region;
use Illuminate\Support\Facades\DB;
use App\Models\Flower;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("regions")->delete();
        $faker = Faker::create();
        $flower_id = Flower::all()->pluck("id")->toArray();
        for ($i = 0; $i < 20; $i++) {
            Region::create([
                'flower_id' =>$faker->randomElement($flower_id),
                'region_name'=>$faker->address,
            ]);
        }
    }
}
