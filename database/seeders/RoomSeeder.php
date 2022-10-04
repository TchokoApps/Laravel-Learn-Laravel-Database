<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->truncate();

        $rooms = [];

        $faker = Faker::create();

        foreach (range(1, 10) as $value) {
            $rooms[] = [
                'room_number' => $faker->unique()->numberBetween(1, 30),
                'room_size' => $faker->numberBetween(1, 5),
                'price' => $faker->numberBetween(100, 600),
                'description' => $faker->text(1000),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('rooms')->insert($rooms);
    }
}
