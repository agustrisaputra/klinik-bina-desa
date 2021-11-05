<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $divisions = [
            'Penataan Desa',
            'Kerjasama Desa',
            'Administrasi Pemerintahan Desa',
            'Pemberdayaan Lembaga Desa',
        ];

        foreach ($divisions as $division) {
            DB::table('divisions')->insert(['name' => $division]);
        }
    }
}
