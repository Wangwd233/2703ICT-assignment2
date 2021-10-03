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
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('reviews')->insert([
            'item_id' => 3,
            'user_id' => 2,
            'rating' => 5,
            'review' => 'Fresh and delicious.',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
    }
}
