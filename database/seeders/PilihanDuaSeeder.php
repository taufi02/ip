<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PilihanDuaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i=1; $i <= 100; $i++){

            DB::table('pilihan_duas')->insert([
                'user_id' => $i,
                'instansi_id' => $faker->numberBetween($min = 1, $max = 20)
            ]);
        }
    }
}
