<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InstansiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('instansis')->insert([
            'nama' => 'BPS'
        ]);
        DB::table('instansis')->insert([
            'nama' => 'PUPR'
        ]);
        DB::table('instansis')->insert([
            'nama' => 'Kemenkeu'
        ]);
        DB::table('instansis')->insert([
            'nama' => 'Pemda Malang'
        ]);
        DB::table('instansis')->insert([
            'nama' => 'BPS Batu'
        ]);
        DB::table('instansis')->insert([
            'nama' => 'Kemenpora'
        ]);
        DB::table('instansis')->insert([
            'nama' => 'Kemenkes'
        ]);
        DB::table('instansis')->insert([
            'nama' => 'Polri'
        ]);
        DB::table('instansis')->insert([
            'nama' => 'Kemen PUPR'
        ]);
        DB::table('instansis')->insert([
            'nama' => 'Polda Riau'
        ]);
        DB::table('instansis')->insert([
            'nama' => 'Pemkab Buleleng'
        ]);
        DB::table('instansis')->insert([
            'nama' => 'KKP'
        ]);
        DB::table('instansis')->insert([
            'nama' => 'Kemenhan'
        ]);
        DB::table('instansis')->insert([
            'nama' => 'BUMN'
        ]);
        DB::table('instansis')->insert([
            'nama' => 'Pemda Sulawesi Utara'
        ]);
        DB::table('instansis')->insert([
            'nama' => 'Kemenag'
        ]);
        DB::table('instansis')->insert([
            'nama' => 'Sekretariat Presiden'
        ]);
        DB::table('instansis')->insert([
            'nama' => 'Pemda DKI'
        ]);
        DB::table('instansis')->insert([
            'nama' => 'Kemenpora'
        ]);
        DB::table('instansis')->insert([
            'nama' => 'PKN STAn'
        ]);
    }
}
