<?php

namespace Database\Seeders;

use App\Models\Post;
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
        DB::table('comments')->delete();

        $comments = [];

        $faker = Faker::create();

        foreach (range(1, 60) as $value) {
            $comments[] = [
                'content' => $faker->text(5),
                'rating' => $faker->numberBetween(1, 5),
                'user_id' => $faker->numberBetween(1, 5),
                'post_id' => $faker->numberBetween(1, 10),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('comments')->insert($comments);
    }
}
