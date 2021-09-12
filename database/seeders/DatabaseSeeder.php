<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->count(100)->create();
        $this->call([
            NilaiSemSatuSeeder::class,
            NilaiSemDuaSeeder::class,
            NilaiSemTigaSeeder::class,
            NilaiSemEmpatSeeder::class,
            NilaiSemLimaSeeder::class,
            NilaiSemEnamSeeder::class,
            SkdSeeder::class,
            InstansiSeeder::class,
            AktifSeeder::class,
            PilihanSatuSeeder::class,
            PilihanDuaSeeder::class,
            PilihanTigaSeeder::class,
            RoleSeeder::class,
        ]);


        // \App\Models\User::factory(10)->create();
    }
}
