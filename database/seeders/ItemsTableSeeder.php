<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('items')->insert([
            'name' => 'milk',
            'manufacturer' => 'Coles',
            'description' => 'Fresh coles milk',
            'price' => '10.00',
            'url' => '',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('items')->insert([
            'name' => 'bread',
            'manufacturer' => 'Coles',
            'description' => 'Fresh coles bread',
            'price' => '5.00',
            'url' => 'https://www.coles.com/',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('items')->insert([
            'name' => 'beef',
            'manufacturer' => 'Coles',
            'description' => 'Fresh coles beef',
            'price' => '15.00',
            'url' => '',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('items')->insert([
            'name' => 'chocolate',
            'manufacturer' => 'TimTam',
            'description' => 'Delicious creamed flavour',
            'price' => '2.50',
            'url' => '',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('items')->insert([
            'name' => 'cookies',
            'manufacturer' => 'Coles',
            'description' => 'Cracked cookies',
            'price' => '4.95',
            'url' => '',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
    }
}
