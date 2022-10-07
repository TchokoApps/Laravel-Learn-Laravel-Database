<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CityRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('city_room')->delete();

        $faker = Faker::create();

        for ($i = 1; $i <= 10; $i++) {
            DB::table('city_room')->insert([
                'city_id' => $faker->numberBetween(1, 3),
                'room_id' => $faker->numberBetween(1, 10)
            ]);
        }
    }
}
