<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('reviews')->insert([
            'item_id' => 1,
            'user_id' => 1,
            'rating' => 3,
            'review' => 'Very nice milk.',
            'like'   => 0,
            'dislike' => 0,
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('reviews')->insert([
            'item_id' => 3,
            'user_id' => 2,
            'rating' => 5,
            'review' => 'Fresh and delicious.',
            'like'   => 0,
            'dislike' => 0,
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('reviews')->insert([
            'item_id' => 1,
            'user_id' => 2,
            'rating' => 5,
            'review' => 'Fresh and delicious.',
            'like'   => 0,
            'dislike' => 0,
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('reviews')->insert([
            'item_id' => 1,
            'user_id' => 3,
            'rating' => 5,
            'review' => 'Fresh and delicious.',
            'like'   => 0,
            'dislike' => 0,
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('reviews')->insert([
            'item_id' => 1,
            'user_id' => 4,
            'rating' => 5,
            'review' => 'Fresh and delicious.',
            'like'   => 0,
            'dislike' => 0,
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('reviews')->insert([
            'item_id' => 1,
            'user_id' => 5,
            'rating' => 5,
            'review' => 'Fresh and delicious.',
            'like'   => 0,
            'dislike' => 0,
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('reviews')->insert([
            'item_id' => 1,
            'user_id' => 6,
            'rating' => 5,
            'review' => 'Fresh and delicious.',
            'like'   => 0,
            'dislike' => 0,
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('reviews')->insert([
            'item_id' => 3,
            'user_id' => 3,
            'rating' => 5,
            'review' => 'Fresh and delicious.',
            'like'   => 0,
            'dislike' => 0,
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
    }
}
