<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reservations')->truncate();

        $reservations = [];

        $faker = Faker::create();

        foreach (range(1, 10) as $value) {
            $reservations[] = [
                'user_id' => $faker->numberBetween(1,5),
                'room_id'=> $faker->numberBetween(1,10),
                'check_in'=>$faker->dateTimeBetween('-10 days', 'now'),
                'check_out'=>$faker->dateTimeBetween('now', '+10 days'),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('reservations')->insert($reservations);
    }
}
