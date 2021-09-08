<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class NilaiSemTigaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i=1; $i <= 40; $i++){

            DB::table('nilai_sem_tigas')->insert([
                'id' => $i,
                'user_id' => $i,
                'hkn' => $faker->randomFloat(2,2.75,4),
                'akbi' => $faker->randomFloat(2,2.75,4),
                'mankeu' => $faker->randomFloat(2,2.75,4),
                'hukpertanahan' => $faker->randomFloat(2,2.75,4),
                'lelang' => $faker->randomFloat(2,2.75,4),
                'pap1' => $faker->randomFloat(2,2.75,4),
                'bmn1' => $faker->randomFloat(2,2.75,4),
                'hap' => $faker->randomFloat(2,2.75,4),
                'ip' => $faker->randomFloat(2,2.75,4),
            ]);
        };
    }
}
