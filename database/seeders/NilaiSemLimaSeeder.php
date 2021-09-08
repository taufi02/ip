<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class NilaiSemLimaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i=1; $i <= 70; $i++){

            DB::table('nilai_sem_limas')->insert([
                'id' => $i,
                'user_id' => $i,
                'pap3' => $faker->randomFloat(2,2.75,4),
                'pu1' => $faker->randomFloat(2,2.75,4),
                'keupub' => $faker->randomFloat(2,2.75,4),
                'pbj' => $faker->randomFloat(2,2.75,4),
                'aplbmn' => $faker->randomFloat(2,2.75,4),
                'simkn2' => $faker->randomFloat(2,2.75,4),
                'ip' => $faker->randomFloat(2,2.75,4),
            ]);
        };
    }
}
