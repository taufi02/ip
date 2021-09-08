<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class NilaiSemEmpatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i=1; $i <= 35; $i++){

            DB::table('nilai_sem_empats')->insert([
                'id' => $i,
                'user_id' => $i,
                'akpem' => $faker->randomFloat(2,2.75,4),
                'pap2' => $faker->randomFloat(2,2.75,4),
                'bmn2' => $faker->randomFloat(2,2.75,4),
                'knd' => $faker->randomFloat(2,2.75,4),
                'knl' => $faker->randomFloat(2,2.75,4),
                'simkn' => $faker->randomFloat(2,2.75,4),
                'makro' => $faker->randomFloat(2,2.75,4),
                'ptun' => $faker->randomFloat(2,2.75,4),
                'ip' => $faker->randomFloat(2,2.75,4),
            ]);
        };
    }
}
