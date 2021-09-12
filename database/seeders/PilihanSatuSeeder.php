<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;


class PilihanSatuSeeder extends Seeder
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

            DB::table('pilihan_satus')->insert([
                'user_id' => $i,
                'instansi_id' => $faker->numberBetween($min = 1, $max = 20)
            ]);
        }
    }
}
