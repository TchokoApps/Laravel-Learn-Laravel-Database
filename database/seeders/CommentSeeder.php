<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->truncate();

        $comments = [];

        $faker = Faker::create();

        foreach (range(1, 10) as $value) {
            $comments[] = [
                'content' => $faker->text(100),
                'user_id'=> $faker->numberBetween(1,5),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('comments')->insert($comments);
    }
}
