<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class NilaiSemDuaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i=1; $i <= 50; $i++){

            DB::table('nilai_sem_duas')->insert([
                'id' => $i,
                'user_id' => $i,
                'pancasila' => $faker->randomFloat(2,2.75,4),
                'bing' => $faker->randomFloat(2,2.75,4),
                'mikro' => $faker->randomFloat(2,2.75,4),
                'pajak' => $faker->randomFloat(2,2.75,4),
                'ppkn' => $faker->randomFloat(2,2.75,4),
                'pengakun2' => $faker->randomFloat(2,2.75,4),
                'hukperus' => $faker->randomFloat(2,2.75,4),
                'hukper' => $faker->randomFloat(2,2.75,4),
                'piutang' => $faker->randomFloat(2,2.75,4),
                'ip' => $faker->randomFloat(2,2.75,4),
            ]);
        };
    }
}
