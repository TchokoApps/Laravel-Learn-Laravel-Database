<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('addresses')->delete();

        $addresses = [];

        $faker = Faker::create();

        foreach (range(1, 5) as $value) {
            $addresses[] = [
                'number' => $faker->numberBetween(1,5),
                'street'=> $faker->streetName(),
                'user_id'=> $faker->unique()->numberBetween(1,5),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('addresses')->insert($addresses);
    }
}
