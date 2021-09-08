<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class NilaiSemEnamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i=1; $i <= 10; $i++){

            DB::table('nilai_sem_enams')->insert([
                'id' => $i,
                'user_id' => $i,
                'pu2' => $faker->randomFloat(2,2.75,4),
                'manris' => $faker->randomFloat(2,2.75,4),
                'etikor' => $faker->randomFloat(2,2.75,4),
                'bnpk' => $faker->randomFloat(2,2.75,4),
                'ktta' => $faker->randomFloat(2,2.75,4),
                'pkl' => $faker->randomFloat(2,2.75,4),
                'ip' => $faker->randomFloat(2,2.75,4),
            ]);
        };
    }
}
