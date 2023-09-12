<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\DB;
use Illuminate\Support\Facades\DB as FacadesDB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    // php artisan db:seed --class=ProdukSeeder


    public function run(): void
    {
        FacadesDB::table('produks')->insert([
            'nama' => 'testing',
            'jumlah' => '23',
            'deskripsi' => 'test',
        ]);
    }
}
