<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->delete();

        $cities = [];

        $faker = Faker::create();

        foreach (range(1, 3) as $value) {
            $cities[] = [
                'name' => $faker->unique()->city(),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('cities')->insert($cities);
    }
}
