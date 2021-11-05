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
        // \App\Models\User::factory(10)->create();
        \App\Models\Province::factory()->create()->each(function($province) {
            $regency = \App\Models\Regency::factory()->make();

            $province->regencies()->save($regency);
        });

        $this->call(DistrictSeeder::class);
        $this->call(VillageSeeder::class);
        $this->call(DivisionSeeder::class);
        $this->call(PositionSeeder::class);
    }
}
