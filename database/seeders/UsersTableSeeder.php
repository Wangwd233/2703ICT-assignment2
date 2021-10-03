<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'Bob',
            'email' => 'Bob@gmail.com',
            'password' => bcrypt('123456'),
            'type' => 'Moderator',
        ]);

        DB::table('users')->insert([
            'name' => 'Fred',
            'email' => 'Fred@gmail.com',
            'password' => bcrypt('666666'),
            'type' => 'Member',
        ]);
        DB::table('users')->insert([
            'name' => 'Alice',
            'email' => 'Alice@gmail.com',
            'password' => bcrypt('888888'),
            'type' => 'Moderator',
        ]);
    }
}
