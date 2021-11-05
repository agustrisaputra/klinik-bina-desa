<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file       = __DIR__ . '/csv/districts.csv';
        $header     = array('regency_id', 'name');
        $data       = csvToArray($file, $header);
        $collection = collect($data);

        foreach ($collection as $district) {
            DB::table('districts')->insert($district);
        }
    }
}
