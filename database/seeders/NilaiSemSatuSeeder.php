<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class NilaiSemSatuSeeder extends Seeder
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

            DB::table('nilai_sem_satus')->insert([
                'id' => $i,
                'user_id' => $i,
                'agama' => $faker->randomFloat(2,2.75,4),
                'kwn' => $faker->randomFloat(2,2.75,4),
                'pih' => $faker->randomFloat(2,2.75,4),
                'pie' => $faker->randomFloat(2,2.75,4),
                'bi' => $faker->randomFloat(2,2.75,4),
                'stat' => $faker->randomFloat(2,2.75,4),
                'pengakun1' => $faker->randomFloat(2,2.75,4),
                'manajemen' => $faker->randomFloat(2,2.75,4),
                'ip' => $faker->randomFloat(2,2.75,4),
            ]);
        };

    }
}
