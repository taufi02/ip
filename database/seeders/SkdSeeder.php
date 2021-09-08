<?php

namespace Database\Seeders;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class SkdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i=1; $i <= 55; $i++){

            DB::table('skds')->insert([
                'id' => $i,
                'user_id' => $i,
                'twk' => $faker->numberBetween(60,100),
                'tiu' => $faker->numberBetween(60,100),
                'tkp' => $faker->numberBetween(60,100),
                'skd' => $faker->numberBetween(60,100),
                        ]);
        };
    }
}
