<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class menuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('menus')->insert([
            'nama' => 'Ketupat Kandangan',
            'kategori' => 'makanan',
            'deskripsi' => 'Makanan khas Banjarmasin',
        ]);


    }
}
