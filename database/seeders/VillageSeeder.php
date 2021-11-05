<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VillageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file       = __DIR__ . '/csv/desa.csv';
        $header     = array('district_id', 'name');
        $data       = csvToArray($file, $header);
        $collection = collect($data);

        foreach ($collection as $village) {
            DB::table('villages')->insert($village);
        }
    }
}
