<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use App\Models\Flower;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class FlowersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("flowers")->delete();
        $faker = Faker::create();
        for ($i = 0; $i < 20; $i++) {
            $img = $faker->randomElement(File::allFiles(public_path("imgs")));
            $img = str_replace(public_path(),"", $img);
            Flower::create([
                'name'=>$faker->firstName,
                'description'=> $faker->paragraph(1),
                'image_url'=> $img,
            ]);
        }
    }
}
