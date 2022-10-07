<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->delete();

        $posts = [];

        $faker = Faker::create();

        for ($i = 1; $i < 10; $i++) {
            $posts[] = [
                'title' => $faker->text(20),
                'content' => $faker->text(1000),
                'user_id' => $faker->numberBetween(1, 5),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('posts')->insert($posts);
    }
}
